<?php

if(isset($_POST["submit"])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $phoneNo = $_POST['phoneNo'];

    require_once 'config.php';
    require_once 'functions.inc.php';


    if(invalidUsername($username) !== false) {
        header("location: ../cus_register.php?error=invalidusername");
        exit();
    }

    if(invalidEmail($email) !== false) {
        header("location: ../cus_register.php?error=invalidemail");
        exit();
    }

    if(usernameExists($conn, $username, $email) !== false) {
        header("location: ../cus_register.php?error=usernametaken");
        exit();
    }

    createCustomer($conn, $name, $email, $username, $password, $address, $phoneNo);
    }
    else {
    header("location: ../cus_register.php");
    exit();
}
