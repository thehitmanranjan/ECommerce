<?php
include ('common.php');
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Products</title>
    </head>
    <body>
        <?php
        include('header.php');
        include('check-if-added.php');
        ?>
        <div class="container mt-4" style="padding:0;">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>      
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place!</p>
            </div>
        </div>
        <div class="container" style="padding:0;">
            <div class="row">
                <div class="col-12 col-md-3 mt-2">
                    <div class="img-thumbnail">
                            <img src="image/cannon.jpg" alt="" style="width:100%">
                            <div class="caption">
                                <h3 align="center">Cannon EOS</h3>
                                <p align="center">Price ₹36000.00</p>
                                <?php
                                if(!isset($_SESSION['id']))
                                {
                                    ?>
                                <a class="btn btn-primary btn-block" href="login.php">Add to cart</a>   
                                <?php
                                }
                                else
                                {
                                    $ret=check(1);
                                    if($ret==1)
                                    {
                                        ?>
                                <button class="btn btn-primary btn-block" disabled>Added to cart</button>
                                <?php
                                    }
                                    else
                                    {
                                        ?>
                                <a class="btn btn-primary btn-block" href="addtocart.php?id=1">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
                            </div>
                        </div> 
                </div>

                <div class="col-12 col-md-3 mt-2">
                    <div class="img-thumbnail">
                            <img src="image/sony_white.jpg" alt="" style="width:100%">
                            <div class="caption">
                                <h3 align="center">Sony DSLR</h3>
                                <p align="center">Price ₹40000.00</p>
                                <?php
                                if(!isset($_SESSION['id']))
                                {
                                    ?>
                                <a class="btn btn-primary btn-block" href="login.php">Add to cart</a>   
                                <?php
                                }
                                else
                                {
                                    $ret=check(2);
                                    if($ret==1)
                                    {
                                        ?>
                                <button class="btn btn-primary btn-block" disabled>Added to cart</button>
                                <?php
                                    }
                                    else
                                    {
                                        ?>
                                <a class="btn btn-primary btn-block" href="addtocart.php?id=2">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
                            </div>
                        </div> 
                </div>

                <div class="col-md-3 col-12 mt-2">
                    <div class="img-thumbnail">
                            <img src="image/sony_black.jpg" alt="" style="width:100%">
                            <div class="caption">
                                <h3 align="center">Sony DSLR</h3>
                                <p align="center">Price ₹50000.00</p>
                                <?php
                                if(!isset($_SESSION['id']))
                                {
                                    ?>
                                <a class="btn btn-primary btn-block" href="login.php">Add to cart</a>   
                                <?php
                                }
                                else
                                {
                                    $ret=check(3);
                                    if($ret==1)
                                    {
                                        ?>
                                <button class="btn btn-primary btn-block" disabled>Added to cart</button>
                                <?php
                                    }
                                    else
                                    {
                                        ?>
                                <a class="btn btn-primary btn-block" href="addtocart.php?id=3">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
                            </div>
                        </div>
                </div>
                <div class="col-md-3 col-12 mt-2">
                    <div class="img-thumbnail">
                            <img src="image/olympus.jpg" alt="" style="width:100%">
                            <div class="caption">
                                <h3 align="center">Olympus DSLR</h3>
                                <p align="center">Price ₹80000.00</p>
                                <?php
                                if(!isset($_SESSION['id']))
                                {
                                    ?>
                                <a class="btn btn-primary btn-block" href="login.php">Add to cart</a>   
                                <?php
                                }
                                else
                                {
                                    $ret=check(4);
                                    if($ret==1)
                                    {
                                        ?>
                                <button class="btn btn-primary btn-block" disabled>Added to cart</button>
                                <?php
                                    }
                                    else
                                    {
                                        ?>
                                <a class="btn btn-primary btn-block" href="addtocart.php?id=4">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
                            </div>
                        </div>
                </div>                
            </div>
            <div class="row mt-4">
                <div class="col-12 col-md-3 mt-2">
                    <div class="img-thumbnail">
                            <img src="image/titan301.jpg" alt="" style="width:100%">
                            <div class="caption">
                                <h3 align="center">Titan Model #301</h3>
                                <p align="center">Price ₹13000.00</p>
                                <?php
                                if(!isset($_SESSION['id']))
                                {
                                    ?>
                                <a class="btn btn-primary btn-block" href="login.php">Add to cart</a>   
                                <?php
                                }
                                else
                                {
                                    $ret=check(5);
                                    if($ret==1)
                                    {
                                        ?>
                                <button class="btn btn-primary btn-block" disabled>Added to cart</button>
                                <?php
                                    }
                                    else
                                    {
                                        ?>
                                <a class="btn btn-primary btn-block" href="addtocart.php?id=5">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
                            </div>
                        </div> 
                </div>

                <div class="col-md-3 col-12 mt-2">
                    <div class="img-thumbnail">
                            <img src="image/titan201.jpg" alt="" style="width:100%">
                            <div class="caption">
                                <h3 align="center">Titan Model #201</h3>
                                <p align="center">Price ₹3000.00</p>
                                <?php
                                if(!isset($_SESSION['id']))
                                {
                                    ?>
                                <a class="btn btn-primary btn-block" href="login.php">Add to cart</a>   
                                <?php
                                }
                                else
                                {
                                    $ret=check(6);
                                    if($ret==1)
                                    {
                                        ?>
                                <button class="btn btn-primary btn-block" disabled>Added to cart</button>
                                <?php
                                    }
                                    else
                                    {
                                        ?>
                                <a class="btn btn-primary btn-block" href="addtocart.php?id=6">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
                            </div>
                        </div> 
                </div>

                <div class="col-md-3 col-12 mt-2">
                    <div class="img-thumbnail">
                            <img src="image/hmt.jpg" alt="" style="width:100%">
                            <div class="caption">
                                <h3 align="center">HMT Milan</h3>
                                <p align="center">Price ₹8000.00</p>
                                <?php
                                if(!isset($_SESSION['id']))
                                {
                                    ?>
                                <a class="btn btn-primary btn-block" href="login.php">Add to cart</a>   
                                <?php
                                }
                                else
                                {
                                    $ret=check(7);
                                    if($ret==1)
                                    {
                                        ?>
                                <button class="btn btn-primary btn-block" disabled>Added to cart</button>
                                <?php
                                    }
                                    else
                                    {
                                        ?>
                                <a class="btn btn-primary btn-block" href="addtocart.php?id=7">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
                            </div>
                        </div>
                </div>
                <div class="col-md-3 col-12 mt-2">
                    <div class="img-thumbnail">
                            <img src="image/faber.jpg" alt="" style="width:100%">
                            <div class="caption">
                                <h3 align="center">Faber Luba #111</h3>
                                <p align="center">Price ₹18000.00</p>
                                <?php
                                if(!isset($_SESSION['id']))
                                {
                                    ?>
                                <a class="btn btn-primary btn-block" href="login.php">Add to cart</a>   
                                <?php
                                }
                                else
                                {
                                    $ret=check(8);
                                    if($ret==1)
                                    {
                                        ?>
                                <button class="btn btn-primary btn-block" disabled>Added to cart</button>
                                <?php
                                    }
                                    else
                                    {
                                        ?>
                                <a class="btn btn-primary btn-block" href="addtocart.php?id=8">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
                            </div>
                        </div>
                </div>                
            </div>            
            <div class="row mt-4">
                <div class="col-12 col-md-3 mt-2">
                    <div class="img-thumbnail">
                            <img src="image/hw.jpg" alt="" style="width:100%">
                            <div class="caption">
                                <h3 align="center">H&W</h3>
                                <p align="center">Price ₹800.00</p>
                                <?php
                                if(!isset($_SESSION['id']))
                                {
                                    ?>
                                <a class="btn btn-primary btn-block" href="login.php">Add to cart</a>   
                                <?php
                                }
                                else
                                {
                                    $ret=check(9);
                                    if($ret==1)
                                    {
                                        ?>
                                <button class="btn btn-primary btn-block" disabled>Added to cart</button>
                                <?php
                                    }
                                    else
                                    {
                                        ?>
                                <a class="btn btn-primary btn-block" href="addtocart.php?id=9">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
                            </div>
                        </div> 
                </div>

                <div class="col-12 col-md-3 mt-2">
                    <div class="img-thumbnail">
                            <img src="image/luis.jpg" alt="" style="width:100%">
                            <div class="caption">
                                <h3 align="center">Luis Phil</h3>
                                <p align="center">Price ₹100.00</p>
                                <?php
                                if(!isset($_SESSION['id']))
                                {
                                    ?>
                                <a class="btn btn-primary btn-block" href="login.php">Add to cart</a>   
                                <?php
                                }
                                else
                                {
                                    $ret=check(10);
                                    if($ret==1)
                                    {
                                        ?>
                                <button class="btn btn-primary btn-block" disabled>Added to cart</button>
                                <?php
                                    }
                                    else
                                    {
                                        ?>
                                <a class="btn btn-primary btn-block" href="addtocart.php?id=10">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
                            </div>
                        </div> 
                </div>

                <div class="col-12 col-md-3 mt-2">
                    <div class="img-thumbnail">
                            <img src="image/john.jpg" alt="" style="width:100%">
                            <div class="caption">
                                <h3 align="center">John Zok</h3>
                                <p align="center">Price ₹1500.00</p>
                                <?php
                                if(!isset($_SESSION['id']))
                                {
                                    ?>
                                <a class="btn btn-primary btn-block" href="login.php">Add to cart</a>   
                                <?php
                                }
                                else
                                {
                                    $ret=check(11);
                                    if($ret==1)
                                    {
                                        ?>
                                <button class="btn btn-primary btn-block" disabled>Added to cart</button>
                                <?php
                                    }
                                    else
                                    {
                                        ?>
                                <a class="btn btn-primary btn-block" href="addtocart.php?id=11">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
                            </div>
                        </div>
                </div>
                <div class="col-12 col-md-3 mt-2">
                    <div class="img-thumbnail">
                            <img src="image/jhalsani.jpg" alt="" style="width:100%">
                            <div class="caption">
                                <h3 align="center">Jhalsani</h3>
                                <p align="center">Price ₹1300.00</p>
                                <?php
                                if(!isset($_SESSION['id']))
                                {
                                    ?>
                                <a class="btn btn-primary btn-block" href="login.php">Add to cart</a>   
                                <?php
                                }
                                else
                                {
                                    $ret=check(12);
                                    if($ret==1)
                                    {
                                        ?>
                                <button class="btn btn-primary btn-block" disabled>Added to cart</button>
                                <?php
                                    }
                                    else
                                    {
                                        ?>
                                <a class="btn btn-primary btn-block" href="addtocart.php?id=12">Add to cart</a>
                                <?php
                                }
                                }
                                ?>
                            </div>
                        </div>
                </div>                
            </div>
        </div>
        <div class="container-fluid"style="padding:0;">
            <div class="row mt-5 pt-5">
                <div class="col-12">
                <footer>
                    <p align="center" class="foot">Copyright © Lifestyle Store. All Rights
                    Reserved | Contact Us: +91 90000 00000</p>
                </footer>
                </div>
            </div>
        </div>
    </body>
</html>
        