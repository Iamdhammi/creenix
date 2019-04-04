<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
$des ="";
    if(isset($_POST['submit'])){
        $des = $_POST['des'];
    } 
?>
<!DOCTYPE html>
<html>
<body>
    <?php
    $packages = array("Mockup Design: ₦10,000","Job Delivery: 2 working days","2 Sample Designs","3 Sample Mockups","Dynamic Orientations","Branding");
    foreach ($packages as $value) {
        echo "$value <br>";
    }

    echo "<h2>Your Input:</h2>";
    echo $_POST["quantity"];
    echo "<br>";
    echo "₦".$_POST["budget"];
    echo "<br>";
    echo $_POST["des"];
    echo "<br>";
    echo $_POST["message"];
    echo "<br>";
    
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