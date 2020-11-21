<?php
include('common.php');
?>
<html>

<head>
    <title>Whole Foods Market</title>
    <meta charset="UTF-8">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link href="css/base.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
    if (isset($_SESSION['id'])) {
        echo "<script>location='products.php'</script>";
    }
    ?>
    <?php
    include('header.php');
    ?>
    <div class="container-fluid" style="padding:0px;">
        <section class="banner">
            <div class="row">
                <div class="banner__text col-xl-4 offset-xl-4 col-md-6 offset-md-3 pb-5">
                    <h1 class="banner__text__heading">Welcome to Whole Foods Market</h1>
                    <p class="banner__text__description">Find all your favourite food here</p>
                    <a class="btn btn-danger" href="products.php">
                        <p class="banner__text__button">Order Kit Now</p>
                    </a>
                </div>
            </div>
        </section>
        <section class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <a href="login.php">
                        <div class="img-thumbnail">
                            <img src="image/indianfood.jpg" alt="" style="width:100%">
                            <div class="caption food__caption">
                                <h3>Indian Food</h3>
                                <p>Choose Amongst the best Indian Foods Available</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-4">
                    <a href="login.php">
                        <div class="img-thumbnail">
                            <img src="image/italianfood.jpg" alt="" style="width:100%">
                            <div class="caption food__caption">
                                <h3>Italian Food</h3>
                                <p>Choose Amongst the best Italian Foods Available</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-4">
                    <a href="login.php">
                        <div class="img-thumbnail">
                            <img src="image/chinesefood.jpg" alt="" style="width:100%">
                            <div class="caption food__caption">
                                <h3>Chinese Food</h3>
                                <p>Choose Amongst the best Chinese Foods Available</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <footer>
            <p class="footer__text">Copyright &copy; Whole Foods Market. All Rights
                Reserved | Contact Us: +91 96933 71403</p>
        </footer>
    </div>
</body>

</html>