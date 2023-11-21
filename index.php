<?php 
session_start();

if(!isset($_SESSION['user'])){
    header('Location: ./login.php');
}
require('./include/db.php');
require('./include/defined_variable.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <?php require('./head.php');?>
</head>
<body>
 <?php require('./header.php');?>   
  <h1>Welcome, <?= $_SESSION['user']?></h1>
<?php require('./footer.php')?>    
</body>
</html>

