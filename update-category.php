<?php

include("cms-crud.php");

$name=$_POST ["name"];
$code=$_POST ["code"];

$id=$_POST ["id"];



// duplicat check



    //email nai


$query="UPDATE category SET name='$name', code='$code' WHERE id=$id";

$sql=cmsUpdate($query, "Sorry Some Thing Missing");

if($sql){
    
    $msg="Your Category Update Done!";
    header("Location: category-list.php?msg=".$msg);
}
else{
    $msg="Your Category Update NOT Done, Sorry";
    header("Location: category-list.php?msg=".$msg);
}



//end


// echo $fullname.$email.$password;
// exit();


?>