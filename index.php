<?php
include('common.php');
?>
<html>
    <head>
        <title>Lifestyle Store</title>
        <meta charset="UTF-8">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style="margin:0">
        <?php
        if(isset($_SESSION['id'])){
        echo "<script>location='products.php'</script>";
        }
        ?>
        <?php
        include('header.php');
        ?>
        <div class="container-fluid" style="padding:0px;">
            <div id="background">
                <div class="row">
                    <div class="inner_background col-xl-4 offset-xl-4 col-md-6 offset-md-3 pb-5">
                        <br><h1 align="center" style="color:white;">We sell Lifestyle.</h1>
                        <p align="center" style="color:white">Flat 40% off on premium brands</p>
                        <a class="btn btn-danger" href="products.php"><p style="color:white; padding:0;margin:0;">Shop Now</p></a>
                    </div>
                </div>
            </div>
            
            
            
            
            
            <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <a href="login.php" ><div class="img-thumbnail">
                            <img src="image/camera.jpg" alt="" style="width:100%">
                            <div class="caption">
                                <h3 align="center">Cameras</h3>
                                <p align="center">Choose among the best available in the world.</p>
                            </div>
                        </div> 
                    </a>
                </div>

                <div class="col-12 col-md-4">
                    <a href="login.php" ><div class="img-thumbnail">
                            <img src="image/watch.jpg" alt="" style="width:100%">
                            <div class="caption">
                                <h3 align="center">Watches</h3>
                                <p align="center">Original watches from the best brands.</p>
                            </div>
                        </div> 
                    </a>
                </div>

                <div class="col-12 col-md-4">
                    <a href="login.php" ><div class="img-thumbnail">
                            <img src="image/shirt.jpg" alt="" style="width:100%">
                            <div class="caption">
                                <h3 align="center">Shirts</h3>
                                <p align="center">Our exquisite collection of shirts.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
            <footer>
                <p align="center" class="foot">Copyright © Lifestyle Store. All Rights
                    Reserved | Contact Us: +91 90000 00000</p>
            </footer>
        </div>
    </body>
</html>
