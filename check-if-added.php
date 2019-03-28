<?php
function check($item_id)
{
    $conn=mysqli_connect("localhost","root","","store");
if(!$conn)
{
    die("Connection Error".mysqli_connect_error());
}
    $user_id=$_SESSION['id'];
    $query="SELECT * FROM users_items where user_id=$user_id and item_id=$item_id and status='added to cart'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
            return 1;
}
?>