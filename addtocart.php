<?php
include('common.php');
$item_id= filter_input(INPUT_GET,'id');
$user_id=$_SESSION['id'];
$query="INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'added to cart')";
$result= mysqli_query($conn, $query);
echo "<script>location='products.php'</script>";
?>