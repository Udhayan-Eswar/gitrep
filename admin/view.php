<?php
include('connect.php');
if(!isset($_SESSION))
{
  session_start();
 }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>View</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
        <div class="table-responsive table-bordered">
            <table class="table">
                <thead >
                    <tr>
                        
                        <th>Item Name</th>
                        <th>Quantity in unit</th>
                       <?php
                        $row;
                        $sql="select itemname,quantity from quantity WHERE itemname ='". $_SESSION ['item']."'";
                        $result=mysqli_query($conn,$sql);
                        while($row = $result->fetch_assoc()){
                     ?></tr>
                    </thead>
                    <tr>
                     <td>
                     
                         <?php echo htmlentities($row['itemname']);?></td>
                                            <td><?php echo htmlentities($row['quantity']);?></td>
                                            
                                            
                     
                     
                                           



                        </tr><?php }?> 
                        </table>
                        </div>
                        <a href="home.php"> return to home </a>
                        <br>
                        <a href="caffineworld.php">return to caffineworld </a>
                        </div>
                        
                          
                        
                      

                        
</body>
</html>