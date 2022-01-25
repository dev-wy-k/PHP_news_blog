<div class="col-12 col-xl-4">

    <div class="front-panel-right-sidebar vh-100 overflow-auto">

        <div class="card mt-0">            
                          
            <div class="card-body">

                <?php if(isset($_SESSION['user']['id'])){ ?>
                    <p>
                        Hi
                        <b><?php echo $_SESSION['user']['name'] ; ?></b>
                    </p>
                    <a href="dashboard.php" class="btn btn-primary">Go Dashboard</a>
                <?php }else{ ?>
                    <p>
                        Hi
                        <b> Guest </b>
                    </p>
                    <a href="register.php" class="btn btn-primary">Register Here</a>
                <?php } ?>

            </div>
        </div>

        <h4>Categories List</h4>

        <div class="list-group mb-4">

            <a href="<?php echo $url ; ?>/index.php" class="list-group-item list-group-item-action 
            <?php echo isset($_GET['category_id'])? '' : 'active' ; ?>">
                All Category
            </a>

            <?php foreach(fCategories() as $c){ ?>

                <a href="category_base_post.php?category_id=<?php echo $c['id'] ; ?>" class="list-group-item list-group-item-action 
                <?php echo isset($_GET['category_id']) ? ($_GET['category_id'] == $c['id'] ? 'active' : '') : '' ; ?>">

                <?php echo $c['title'] ; ?>

                <?php if($c['ordering'] == 1 ){ ?>
                    <i class="feather-award text-success"></i>
                <?php } ?>

                </a>

            <?php } ?>                
            
        </div>

        

        <div class="mb-4">

                <h4>Search by Date</h4>

                <div class="card">
                    <div class="card-body">

                        <form action="search_by_date.php" method="post">

                            <div class="form-group">
                                <label for="start-date">Start Date</label>
                                <input type="date" name="start" class="form-control" id="start-date" required>
                            </div>

                            <div class="form-group">
                                <label for="end-date">End Date</label>
                                <input type="date" name="end" class="form-control" id="end-date" required>
                            </div>

                            <button class="btn btn-primary float-right">
                                <i class="feather-calendar"></i> Search
                            </button>

                        </form>

                    </div>
                </div>

        </div>

        

    </div>

</div>