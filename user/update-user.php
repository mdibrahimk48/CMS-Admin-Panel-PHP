<?php

include("../cms-crud.php");

$fullname = $_POST["fullname"];
$email = $_POST["email"];
$password = $_POST["password"];
$id = $_POST["id"];



// duplicat check



//email nai


$query = "UPDATE user SET fullname='$fullname', email='$email', password='$password' WHERE id=$id";

$sql = cmsUpdate($query, "Sorry Some Thing Missing");

if ($sql) {

    $msg = "Your Account Update Done!";
    header("Location: ../all-users.php?msg=" . $msg);
} else {
    $msg = "Your Account Update NOT Done, Sorry";
    header("Location: ../all-users.php?msg=" . $msg);
}



//end


// echo $fullname.$email.$password;
// exit();
