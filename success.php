<!DOCTYPE html>
<?php
include('common.php');
?>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/base.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Success</title>
</head>

<body>
    <?php
    if (!isset($_SESSION['id']))
        echo "<script>location='index.php'</script>";
    else
        include('header.php');
    $uid = $_SESSION['id'];
    $query = "update users_items set status='confirmed' where user_id=$uid";
    $result = mysqli_query($conn, $query);
    ?>
    <div class="container mt-4" style="padding:0;">
        <div class="jumbotron">
            <h1>Your Order is confirmed</h1>
            <p> Thank you for shopping with us. <a href="products.php">Click here</a> to purchase any other Food Kit.</p>
        </div>
    </div>
    <div class="container-fluid mt-5 pt-5" style="padding:0;">
        <div class="row mt-5 pt-5">
            <div class="col-12 mt-5 pt-3">
                <footer>
                    <p class="footer__text">Copyright &copy; Whole Foods Market. All Rights
                        Reserved | Contact Us: +91 96933 71403</p>
                </footer>
            </div>
        </div>
    </div>