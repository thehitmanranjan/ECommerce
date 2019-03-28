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
        <title>Settings</title>
    </head>
    <body>
        <?php
        if(!isset($_SESSION['id']))
            echo "<script>location='index.php'</script>";
        else
            include('header.php');
        ?>
        <div class="container-fluid" style="padding:0;">
            <div class="row mt-3">
                    <div class="col-xl-4 offset-xl-4 col-md-6 offset-md-3">
                        <h2>Change Password</h2>
                        <div><h6 style='color:red;'><?php echo filter_input(INPUT_GET,'success');?></h6></div>
                        <form action='settings_script.php' method='post'>
                            <div class="form-group">
                                <input class="form-control" type="password" placeholder="Old Password" name="oldpassword"  required = "required">
                                <div><p style='color:red;'><?php echo filter_input(INPUT_GET,'olderror');?></p></div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control"  placeholder="New Password"  name="newpassword" required = "required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirm Password" name="confirmpassword" required = "required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                                <div><p style='color:red;'><?php echo filter_input(INPUT_GET,'confirmerror');?></p></div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Change Password</button>
                        </form>
                    </div>
                </div>
            </div>
        <div class="container-fluid mt-5 pt-5" style="padding:0;">
            <div class="row mt-5 pt-5">
                <div class="col-12 mt-5">
         <footer>
                <p align="center" class="foot">Copyright © Lifestyle Store. All Rights
                    Reserved | Contact Us: +91 90000 00000</p>
            </footer>
        </div>
            </div>
        </div>
    </body>
</html>