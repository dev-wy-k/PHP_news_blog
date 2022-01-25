<?php include "core/auth.php" ; ?>
<?php include "template/header.php"; ?>
<?php 

    $id = $_GET['id'] ;
    $current = post($id) ;

?>

<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white mb-4">
                <li class="breadcrumb-item"><a href="<?php echo $url ; ?>/index.php"> <i class="feather-home"></i> </a></li>                
                <li class="breadcrumb-item"><a href="<?php echo $url ; ?>/post_list.php">Post Lists </a></li>                
                <li class="breadcrumb-item active" aria-current="page">
                    <?php echo $current['title'] ; ?>
                </li>
            </ol>
            </nav>
    </div>
</div>
<div class="row">
    <div class="col-12 col-md-8 col-xl-6">
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">
                        <i class="feather-info text-primary"></i> Post Details
                    </h4>
                    <div class="">
                        <a href="<?php echo $url ; ?>/post_add.php" class="btn btn-outline-primary mr-1">
                            <i class="feather-plus-circle"></i>
                        </a>
                        <a href="<?php echo $url ; ?>/post_list.php" class="btn btn-outline-primary mr-1">
                            <i class="feather-list"></i>
                        </a>
                        
                    </div>
                </div>

                <hr>

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
    </div>

    <div class="col-12 col-md-8 col-xl-6">
        <div class="card">
            <div class="card-body">

                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">
                        <i class="feather-info text-primary"></i> Post Viewer
                    </h4>
                    <div class="">
                        <a href="#" class="btn btn-outline-primary full-screen-btn">
                            <i class="feather-maximize-2"></i>
                        </a>                        
                    </div>
                </div>

                <hr>

                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Who</th>
                            <th>Device</th>
                            <th>Time</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach(viewerCountByPost($id) as $v){  ?>

                            <tr>
                                <td class="text-nowrap text-capitalize">                                    
                                    <?php

                                    if($v['user_id'] == 0 ){
                                        echo "Guest" ;

                                    }else{
                                     echo user($v['user_id'])['name'] ; 
                                    } ?>
                                </td>
                                <td><?php echo $v['device'] ; ?></td>
                                <td class="text-nowrap"><?php echo showTime($v['created_at']) ; ?></td>

                            </tr>  

                        <?php } ?>
                    </tbody>
                </table>

            </div>

        </div>
    </div>
</div>


<?php include "template/footer.php"; ?>
<script>

    $(".table").DataTable({
        "order": [[ 0, "desc" ]] ,
        "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]]
    } ) ;

</script>