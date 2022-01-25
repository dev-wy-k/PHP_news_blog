<?php session_start() ; ?>
<?php require_once "front_panel/head.php" ; ?>
<title>Home</title>
<?php require_once "front_panel/side_header.php" ; ?>

<div class="container">
    <div class="row">
        <div class="col-12 col-xl-8">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white mb-4">
                    <li class="breadcrumb-item"><a href="<?php echo $url ; ?>/index.php"> <i class="feather-home"></i> </a></li>             
                    <li class="breadcrumb-item active" aria-current="page">
                        <?php echo category($_GET['category_id'])['title'] ; ?>
                    </li>
                </ol>
            </nav>

            <?php 
            
                if(isset($_GET['category_id'])){

                    $id = $_GET['category_id'];   
                    $current = fPostsByCat($id) ;            

                }else{

                    linkTo("index.php") ;

                }


                if(!$current){

                    linkTo("index.php") ;

                
                }
            ?>

            <?php foreach($current as $p){ ?>

                <?php include "single.php" ; ?>

            <?php } ?>

            
        </div>

        <?php require_once "right_sidebar.php" ; ?>
        
    </div>
</div>

<?php require_once "front_panel/foot.php" ; ?>