<?php
include('connect.php');
if(!isset($_SESSION))
{
  session_start();
 }
if (isset($_POST['submit']))
{
   $up="UPDATE quantity SET quantity = ".$_POST['quantity']." WHERE itemname = '".$_SESSION['item']."'";
    $query2=$conn->query($up) or die($conn->error); 
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="POST" action="">
      <h1 class="h3 mb-3 font-weight-normal">Quantity Adder</h1>
      <br>
      <label for="quantity" class="sr-only">Quantity</label>
      <input type="text" id="inputquantity" class="form-control" placeholder="quantity" name="quantity">
      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Submit</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
    </form>
  </body>
</html>

