<?php include "core/auth.php" ?>
<?php include "template/header.php"; ?>

<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white mb-4">
                <li class="breadcrumb-item"><a href="<?php echo $url ; ?>/index.php"> <i class="feather-home"></i> </a></li>
                <li class="breadcrumb-item"><a href="<?php echo $url ; ?>/post_list.php">Post</a></li>
                <li class="breadcrumb-item active" aria-current="page">Update Post</li>
            </ol>
            </nav>
    </div>
</div>
<div class="row">
    <div class="col-12 col-xl-8">
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">
                        <i class="feather-plus-circle text-primary"></i> Update Post
                    </h4>
                    <a href="<?php echo $url ; ?>/post_list.php" class="btn btn-outline-primary">
                        <i class="feather-list"></i>
                    </a>
                </div>
                <hr>

                <?php 

                    $id = $_GET['id'] ;
                    $current = post($id) ;
                
                    if(isset($_POST['updatePost'])){

                        if(postUpdate()){

                            linkTo("post_list.php") ;

                        } ;

                    }
                
                ?>

                <form  method="post">

                    <div class="form-group">
                        <label for="post-title">Post Title</label>
                        <input type="hidden" name="id" value="<?php echo $current['id'] ; ?>" id="">
                        <input type="text" name="title" class="form-control" value="<?php echo $current['title'] ; ?>" id="post-title">
                    </div>

                    <div class="form-group">
                        <label for="post-select">Select Category</label>
                        <select name="category_id" class="custom-select" id="post-select">
                            
                            <?php foreach(categories() as $c){ ?>                 
                            
                                <option value="<?php echo $c['id'] ; ?>" <?php echo $c['id'] == $current['category_id'] ? 'selected' : '' ; ?> ><?php echo $c['title'] ; ?></option>

                            <?php } ?>

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="post-description">Post Description</label>
                        <textarea type="text" name="description" rows="13" class="form-control"  id="post-description">
                            <?php echo $current['description'] ; ?>
                        </textarea>
                    </div>
                    
                    <hr>
                    <button class="btn btn-primary float-right" name="updatePost">Update Post</button>

                </form>

            </div>
        </div>
    </div>
</div>


<?php include "template/footer.php"; ?>