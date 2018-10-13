<?php
include('connect.php');

if(isset($_POST['submit']))
{
$username = $_POST['username'];
$password = $_POST['password'];
$conn =  new mysqli($servername, $username, $pass,$database);
$sql = "SELECT * from login where username ='".$username."' AND password = '".$password."'";
$row=mysqli_query($conn,$sql);
if(mysqli_num_rows($row)==1)
{
$result = $row->fetch_assoc();
$_SESSION['login_user']=$result['name'];
$_SESSION['']=$result['id'];
if($result['type']=="admin")
{
    header("location:/inkscafe/home.php");
}
if($result['type']=="staff")
{
    header("location:/inkscafe/home.php");
}
if($result['type']=="student")
{
    
    header("location://inkscafe/home.php");
}
}

else{
    $error="Username or Password is invalid";
}

}
?>