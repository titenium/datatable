<?php
 session_start();
 include('./db.php');
 $username = $_REQUEST['username'];
 $password = $_REQUEST['password'];
 $sql = "SELECT * FROM user WHERE username = '".$username."' AND password='".md5($password)."'";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['user'] = $row['id'];
    header("Location:./../index.php");
 } else {
    return false;
 }
?>