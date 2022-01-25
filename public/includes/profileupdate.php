<?php
session_start();

if(isset($_POST["submit"])){

    $nameNew = $_POST['name'];
    $usernameNew = $_POST['username'];
    $emailNew = $_POST['email'];
    $passwordNew = $_POST['password'];
    $addressNew = $_POST['address'];
    $phoneNoNew = $_POST['phoneNo'];

    require_once 'config.php';
    require_once 'functions.inc.php';
    
    updateCustomer($conn, $nameNew, $usernameNew, $emailNew, $passwordNew, $addressNew, $phoneNoNew);
    header("location: ../cus_profile.php");
    exit();
}