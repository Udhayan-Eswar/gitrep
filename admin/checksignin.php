<?php
include('connect.php');

if(isset($_POST['submit']))
{
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * from login where username ='".$username."' AND password = '".$password."'";
$row=mysqli_query($conn,$sql);
if(mysqli_num_rows($row)==1)
{
    echo $username; 
$result = $row->fetch_assoc();
$_SESSION['login_user']=$result['username'];
$_SESSION['']=$result['id'];
if($result['type']=="admin")
{
    header("location:/inkscafe/admin/home.php");
}

if($result['type']=="customer")
{
    
    header("location://inkscafe/customer/home.php");
}
}

else{
    $error="Username or Password is invalid";
}

}
?>