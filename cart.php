<!DOCTYPE html>
<?php
include('common.php');
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
        <title>Cart</title>
    </head>
    <body>
        <?php
        if(!isset($_SESSION['id']))
            echo "<script>location='index.php'</script>";
        else
            include('header.php');
        ?>
        <div class="container-fluid mb-5 pb-5" style="padding:0;">
            <div class="row mt-5 pt-5 mb-4">
                    <div class="col-md-6 offset-md-3">
                          <table class="table table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $uid=$_SESSION['id'];
                                $query="SELECT users_items.item_id,items.name,items.price from users_items INNER JOIN items on users_items.item_id=items.id and users_items.user_id=$uid and users_items.status='added to cart'";
                                $result=mysqli_query($conn, $query);
                                $num_rows= mysqli_num_rows($result);
                                $sum=0;
                                if($num_rows==0)
                                {echo'<p style="color:red;">Add items to the cart first!</p>';
                                }
                                else
                                {
                                    while($row= mysqli_fetch_array($result))
                                    {
                                        $sum=$sum+$row['price'];
                                        ?> 
                                <tr>
                                <td><?php echo"{$row['item_id']}"?></td>
                                <td><?php echo"{$row['name']}"?></td>
                                <td><?php echo"{$row['price']}"?></td>
                                <td></td>
                                </tr>
                                <?php
                                    }
                                }
                                if($num_rows!=0){
                                ?>
                                <tr>
                                    <td></td>
                                    <td>Total</td>
                                    <td>₹ <?php echo "$sum";?></td>
                                    <td><a class="btn btn-primary" href='success.php?'>Confirm Order</a>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                          </table>
                    </div>
            </div>
        </div>
        
        <div class="container-fluid mt-5 pt-5" style="padding:0;">
            <div class="row mt-5 pt-5">
                <div class="col-12 mt-5">
                    <footer>
                        <p align="center" class="foot">Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000</p>
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
        