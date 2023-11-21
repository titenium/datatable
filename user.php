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
    <?php include('./head.php');?>
</head>
<body>
 <?php require('./header.php');?>   
<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Photo</th>
            <th>Name</th>
            <th>Address</th>
            <th>Status</th>
            <th>Mobile no</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql ="SELECT * FROM customer";
        $result = $conn->query($sql);
         if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                ?>
        <tr>
            <th><img src="<?= $row['photo']?>" alt="<?= $row['name']?>" width="30px" height="30px"></th>
            <th><?= $row['name']?></th>
            <th><?= $row['address']?></th>
            <th><?= $row['status']?></th>
            <th><?= $row['mobile_no']?></th>
        </tr>
        <?php }
         }?>
    </tbody>
    <tfoot>
        <tr>
            <th>Photo</th>
            <th>Name</th>
            <th>Address</th>
            <th>Status</th>
            <th>Mobile no</th>
        </tr>
    </tfoot>
</table>
<?php require('./footer.php')?>    
</body>
</html>

