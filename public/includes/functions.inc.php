<?php

function invalidUsername($username) {
   
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    }
    else {
        $result = false;
    }

    return $result;
}


function invalidEmail($email) {
  
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else{
        $result =false;
    }

    return $result;
}

function usernameExists($conn, $username, $email) {
   $sql = "SELECT * FROM customer WHERE username = ? OR email = ?;" ;
   $stmt = mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../cus_register.php?error=stmtfailed");
    exit();
   }

   mysqli_stmt_bind_param($stmt, "ss", $username, $email );
   mysqli_stmt_execute($stmt);

   $resultData = mysqli_stmt_get_result($stmt);

   if($row = mysqli_fetch_assoc($resultData)){
    return $row;
   }

   else{
    $result = false;
    return $result;
   }

   mysqli_stmt_close($stmt);
}



function createCustomer($conn, $name, $email, $username, $password, $address, $phoneNo) {
    $sql = "INSERT INTO customer (name, email, username, password, address, phoneNo) 
    VALUES (?, ?, ?, ?, ?, ?);" ;
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
     header("location: ../cus_register.php?error=stmtfail");
     exit();
    }
 
    $passwordHashed = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssssss", $name, $email, $username, $passwordHashed, $address, $phoneNo);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../cus_login.php?error=registerSuccess");
    exit();


 }


 function updateCustomer($conn, $nameNew, $usernameNew, $emailNew, $passwordNew, $addressNew, $phoneNoNew){

    $loggedInUser = $_SESSION['email'];
    $sql = "UPDATE customer SET name='$nameNew', username='$usernameNew', email='$emailNew', password='$passwordNew',address='$addressNew', phoneNo='$phoneNoNew' WHERE email='$loggedInUser'";
    $results = mysqli_query($conn, $sql);
    header("location: ../cus_profile.php?success=userUpdated");
    exit();
    }

?>