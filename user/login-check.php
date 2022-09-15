<?php
session_start();

include("../cms-crud.php");



$email = $_POST["email"];
$password = $_POST["password"];

$query = "SELECT * FROM user WHERE email='$email'AND password='$password' ";
$result = cmsSecletByColumn($query);

$row = mysqli_num_rows($result);
echo $row;

if ($row > 0) {
    $_SESSION["username"] = $email;
    header("Location: ../dashboard.php");
} else {
    $msg = "Does not Mathc email and password";
    header("Location: ../login.php?msg=" . $msg);
}
