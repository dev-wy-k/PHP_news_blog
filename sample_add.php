<?php include "template/header.php"; ?>

<div class="row">
    <div class="col-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-white mb-4">
                <li class="breadcrumb-item"><a href="<?php echo $url ; ?>/index.php"> <i class="feather-home"></i> </a></li>
                <li class="breadcrumb-item"><a href="<?php echo $url ; ?>/item_list.php">Items</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Items</li>
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
                        <i class="feather-plus-circle text-primary"></i> Add Items
                    </h4>
                    <a href="<?php echo $url ; ?>/item_list.php" class="btn btn-outline-primary">
                        <i class="feather-list"></i>
                    </a>
                </div>
                <hr>
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-12 col-md-6">

                            <div class="form-group">
                                <label for="photo">
                                    Photo Upload
                                </label>
                                <i class="feather-info" data-container="body" data-toggle="popover" data-placement="top" data-content="Only Support JPG/PNG"data-placement="top" data-content="Only Support JPG/PNG"></i>
                                <input type="file" name="photo" id="photo" class="form-control p-1" required>
                            </div>

                            <div class="form-group">
                                <label for="name">Item Name</label>
                                <input type="text" name="" id="name" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="t">Items Type</label>
                                <select name="t" id="t" class="form-control custom-select">
                                    <option value="0">ကုန်ဆို</option>
                                    <option value="1">ကုန်ခြောက်</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="c">Category</label>
                                <select name="c" id="c" class="form-control custom-select">
                                    <option value="" selected disabled>Select Category</option>
                                </select>
                            </div>

                            <div class="form-group">    
                                <label for="sc">Sub Category</label>
                                <select name="sc" id="sc" class="form-control custom-select">
                                    <option value="" selected disabled>Select Sub Category</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-row">
                                <div class="col-6">
                                    <label for="q">Quantity</label>
                                    <input type="text" name="q" id="q" class="form-control">
                                </div>
                                <div class="col-6">
                                    <div class="form-group">    
                                        <label for="u">Units</label>
                                        <select name="u" id="u" class="form-control custom-select">
                                            <option value="0">ကုန်ဆို</option>
                                            <option value="1">ကုန်ခြောက်</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" price="" id="price" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="des">Description</label>
                                <textarea type="text" des="" id="des" class="form-control" rows="8"></textarea>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <button class="btn btn-primary float-right">Add Item</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include "template/footer.php"; ?>