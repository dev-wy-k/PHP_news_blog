<?php session_start() ; ?>
<?php require_once "front_panel/head.php" ; ?>
<title>Home</title>
<?php require_once "front_panel/side_header.php" ; ?>
<?php 


    if(isset($_GET['id'])){

        $id = $_GET['id'] ;
        $current = post($id) ;
    
    }else{
       linkTo("index.php") ;    
    }

    if(!$current){
        linkTo("index.php") ;
    }

    $cuurrentCat = $current['category_id'] ;

    if(isset($_SESSION['user']['id'])){

        $user_id = $_SESSION['user']['id'] ;
    }else{
        $user_id = 0 ;
    }

    viewerRecord($user_id, $id, $_SERVER['HTTP_USER_AGENT']) ;

?>

<div class="container">
    <div class="row">
        <div class="col-12 col-xl-8">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white mb-4">                          
                    <li class="breadcrumb-item"><a href="<?php echo $url ; ?>/index.php"> <i class="feather-home"></i> </a></li>              
                    <li class="breadcrumb-item active" aria-current="page">Post Detail</li>
                </ol>
            </nav>

            <div class="card mb-4">
                <div class="card-body">

                    <div class="">
                        <h4> <?php echo $current['title'] ; ?> </h4>
                    </div>

                    <div class="my-3">
                        <span class="mr-2">
                            <i class="feather-user text-primary"></i>
                            <?php echo user($current['user_id'])['name'] ; ?>
                        </span>

                        <span class="mr-2">
                            <i class="feather-layers text-info"></i>
                            <?php echo category($current['category_id'])['title'] ; ?>
                        </span>

                        <span class="mr-2">
                            <i class="feather-calendar text-warning"></i>
                            <?php echo showTime($current['created_at'], "j M Y") ?>
                        </span>
                    </div>

                    <div class="">
                        <p> <?php echo html_entity_decode($current['description']) ; ?> </p>
                    </div>

                </div>
            </div>

            <div class="row">

                <?php foreach(fPostsByCat($cuurrentCat, 2, $id) as $p){ ?>

                     <div class="col-12 col-xl-6">


                        <div class="card shadow-sm mb-4 post">
                            <div class="card-body"> 
                                <a href="detail.php?id=<?php echo $p['id'] ; ?>">
                                    <h5 class="text-primary"><?php echo short($p['title']) ?></h5>
                                </a>
                                <div class="my-3">
                                    <span class="mr-2">
                                        <i class="feather-user text-primary"></i>
                                        <?php echo user($p['user_id'])['name'] ; ?>
                                    </span>

                                    <span class="mr-2">
                                        <i class="feather-layers text-info"></i>
                                        <?php echo category($p['category_id'])['title'] ; ?>
                                    </span>

                                    <span class="mr-2">
                                        <i class="feather-calendar text-warning"></i>
                                        <?php echo showTime($p['created_at'], "j M Y") ?>
                                    </span>
                                </div>
                                <p class="text-black-50">
                                    <?php echo short(strip_tags(html_entity_decode($p['description']))) ; ?>
                                </p>
                            </div>
                        </div>
                        
                    </div>

                <?php } ?>
            </div>

            
        </div>

        <?php require_once "right_sidebar.php" ; ?>
        
    </div>
</div>

<?php require_once "front_panel/foot.php" ; ?>