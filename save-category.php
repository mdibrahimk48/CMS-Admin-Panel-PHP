<?php

include("cms-crud.php");

$name=$_POST ["name"];
$code=$_POST ["code"];

// duplicat check


$query="SELECT * FROM category WHERE name='$name'";
$result=cmsSecletByColumn($query);

$row=mysqli_num_rows($result);
echo $row;

if($row>0){
   //email asee
   $msg="Category Name Must be Unique";
    header("Location: add-category.php?msg=".$msg);

}
else{
    //email nai
    $query = "INSERT INTO category(name, code) 
VALUES ('$name','$code')";


$sql= cmsInsert($query, "Sorry Some Thing Missing");

if($sql){
    $msg="Your Category Create Done";
    header("Location: category-list.php?msg=".$msg);
}
else{
    $msg="Your Category Create Not Done, Sorry Try Again";
    header("Location: add-category.php?msg=".$msg);
}
}


//end


// echo $fullname.$email.$password;
// exit();


?>