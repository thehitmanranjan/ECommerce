<?php
include('common.php');
$oldpassword=filter_input(INPUT_POST,'oldpassword');
$oldpassword=md5($oldpassword);
$newpassword=filter_input(INPUT_POST,'newpassword');
$confirmpassword=filter_input(INPUT_POST,'confirmpassword');
$id=$_SESSION['id'];
$query="select password from users where id=$id";
$result= mysqli_query($conn, $query);
$row= mysqli_fetch_array($result);
$stored_password=$row['password'];
if(strcmp($oldpassword,$stored_password)!=0)
{
    echo "<script>location='settings.php?olderror=Wrong Password!'</script>";
}
else
{
    if(strcmp($newpassword,$confirmpassword)==0)
    {
        $newpassword=md5($newpassword);
        $query="update users set password='$newpassword' where id=$id";
        $result=mysqli_query($conn, $query);
        echo "<script>location='settings.php?success=Password Changed Successfully!'</script>";
    }
    else
    {
        echo "<script>location='settings.php?confirmerror=Passwords don't match'</script>";
    }
}
    
?>