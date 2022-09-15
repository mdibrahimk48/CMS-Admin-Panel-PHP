<?php

include("../cms-crud.php");

$fullname=$_POST ["fullname"];
$email=$_POST ["email"];
$password=$_POST ["password"];

// duplicat check

$email= $_POST ["email"];
$password= $_POST ["password"];

$query="SELECT * FROM user WHERE email='$email'";
$result=cmsSecletByColumn($query);

$row=mysqli_num_rows($result);
echo $row;

if($row>0){
   //email asee
   $msg="Email Must be Unique";
    header("Location: ../registration.php?msg=".$msg);

}
else{
    //email nai
    $query = "INSERT INTO user(fullname, email, password) 
VALUES ('$fullname','$email','$password')";


$sql= cmsInsert($query, "Sorry Some Thing Missing");

if($sql){
    $msg="Your Account Create Done, Please login";
    header("Location: ../login.php?msg=".$msg);
}
else{
    $msg="Your Account Create Not Done, Sorry Try Again";
    header("Location: ../registration.php?msg=".$msg);
}
}


//end


// echo $fullname.$email.$password;
// exit();


?>