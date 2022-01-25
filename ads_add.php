<?php include "core/auth.php" ?>
<?php include "template/header.php"; ?>

<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white mb-4">
                <li class="breadcrumb-item"><a href="<?php echo $url ; ?>/index.php"> <i class="feather-home"></i> </a></li>                
                <li class="breadcrumb-item active" aria-current="page">Add Ads</li>
            </ol>
            </nav>
    </div>
</div>

<?php 
                
    if(isset($_POST['addAds'])){

        adsAdd() ; 

    }

?>

<form class="row" method="post">
    <div class="col-12 col-xl-8">
        <div class="card mb-4">
            <div class="card-body">

                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">
                        <i class="feather-plus-circle text-primary"></i> New Ads
                    </h4>
                    <a href="<?php echo $url ; ?>/ads_list.php" class="btn btn-outline-primary">
                        <i class="feather-list"></i>
                    </a>
                </div>
                <hr>

                <div class="form-group">
                    <label for="owner_name">Owner Name</label>
                    <input type="text" name="owner_name" class="form-control" id="owner_name">
                </div>

                <div class="form-group">
                    <label for="photo">Upload Photo</label>
                    <input type="text" name="photo" class="form-control" id="photo">
                </div>

                <div class="form-group">
                    <label for="link">Link</label>
                    <input type="text" name="link" class="form-control" id="link">
                </div>

                <div class="form-group">
                    <label for="start">Start Date</label>
                    <input type="date" name="start" class="form-control" id="start" format="yyyy-mm-dd">
                </div>

                <div class="form-group">
                    <label for="end">End Date</label>
                    <input type="date" name="end" class="form-control" id="end" format="yyyy-mm-dd">
                </div>

                

                <button class="btn btn-primary float-right" name="addAds">Add Ads</button>


            </div>
        </div>
    </div>

    
</form>


<?php include "template/footer.php"; ?>

