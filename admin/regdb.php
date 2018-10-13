<?php

include('connect.php');
if(isset($_POST['submit']))
{
$customername = $_POST['username'];
$customeremail = $_POST['email'];
$customerphone = $_POST['phone'];
$password = ($_POST['password']);

$check="select * from register where email = '".$customeremail."'";
$row=mysqli_query($conn,$check);
if(mysqli_num_rows($row)==0)
{
    $sql = "insert into register (username,email,phone,password)
    values('$customername' , '$customeremail' ,'$customerphone','$password')";
   mysqli_query($conn,$sql);
   $sql2="INSERT INTO `login` (`username`, `email`, `password`, `type`) VALUES ('$customername', '$customeremail', '$password', 'customer')";
   mysqli_query($conn,$sql2);
?>
<script>
window.alert("registered successfully");
</script>
<?php
}


else{
    $error="Customer already registered";
}
}
?>