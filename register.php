<?php require_once "core/base.php" ?>
<?php require_once "core/functions.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="favicon.ico">
    <title>Register</title>
    <link rel="stylesheet" href="<?php echo $url ; ?>/assets/css/app.css">
    <link rel="stylesheet" href="<?php echo $url ; ?>/assets/vendor/feather-icons-web/feather.css">
    <link rel="stylesheet" href="<?php echo $url ; ?>/assets/css/style.css">
</head>
<body style="background: var(--primary-soft)">

<div class="container">
        <div class="row align-items-center justify-content-center min-vh-100">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">                        
                        <h4 class="text-center text-primary">
                            <i class="feather-users"></i>
                            Register Form
                        </h4>
                        <hr>

                        <?php 
                        
                            if(isset($_POST['reg-btn'])){

                                echo register() ;

                            }
                        
                        
                        
                        ?>

                        <form  method="post">

                            <div class="form-group">
                                <label for="name">
                                    <i class="text-primary feather-user"></i> 
                                    Your Name
                                </label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>

                            <div class="form-group">
                                <label for="email">
                                    <i class="text-primary feather-mail"></i>
                                    Your Email
                                </label>
                                <input type="email" name="email" class="form-control" id="email" required>
                            </div>

                            <div class="form-group">
                                <label for="password">
                                    <i class="text-primary feather-lock"></i>
                                    Password
                                </label>
                                <input type="password" name="password" min="8" class="form-control" id="password" required>
                            </div>

                            <div class="form-group">
                                <label for="cpassword">
                                    <i class="text-primary feather-lock"></i>
                                    Confirm Password
                                </label>
                                <input type="password" name="cpassword" min="8" class="form-control" id="cpassword" required>
                            </div>

                            <div class="form-group float-right">
                                <button class="btn btn-primary" name="reg-btn">Register</button>
                                <a href="login.php" class="btn btn-outline-primary">Sign In</a>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>




    
<script src="<?php echo $url ; ?>/assets/vendor/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="<?php echo $url ; ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $url ; ?>/assets/js/app.js"></script>

</body>
</html>