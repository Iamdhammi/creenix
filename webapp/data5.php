<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
$printype = $brandedtype = $customtype ="";
    if(isset($_POST['submit'])){
        $printype = $_POST['printype'];
    } 
    if(isset($_POST['submit'])){
        $brandedtype = $_POST['brandedtype'];
    } 
    if(isset($_POST['submit'])){
        $customtype = $_POST['customtype'];
    } 
?>
<!DOCTYPE html>
<html>
<body>
    <?php

    echo "<h2>Your Input:</h2>";
    echo $_POST['printype']."<br>";
    echo $_POST['brandedtype']."<br>";
    echo $_POST['customtype']."<br>";
    echo $_POST["cardsize"]."<br>";
    echo $_POST["eflyersize"]."<br>";
    echo $_POST["bannersize"]."<br>";
    echo $_POST["quantity"]."<br>";
    echo $_POST["drivelink"]."<br>";
    echo $_POST["message"]."<br>";
    
    
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $validate = $_POST['validate'];
    if (empty($name)) {
        $errors['name'] = 'Name is required.';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Email is invalid.';
    }
    if (empty($state)) {
        $errors['state'] = 'State is required.';
    }
    if (empty($address)) {
        $errors['address'] = 'State is required.';
    }
    if (empty($contact)) {
        $errors['contact'] = 'Contact number is required.';
    }
    if (empty($validate)) {
        $errors['validate'] = 'Please Validate your package';
    }

    }
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $country;
    echo "<br>";
    echo $state;
    echo "<br>";
    echo $address;
    echo "<br>";
    echo $contact;
    echo "<br>";
    echo $validate;
    echo "<br>";
    ?>
</body>
</html>