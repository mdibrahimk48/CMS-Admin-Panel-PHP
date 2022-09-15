<?php
$id=$_GET["id"];

include("cms-crud.php");
$query="DELETE FROM category WHERE id=$id";
$sql=cmsDelete($query);




if($sql){
    
    $msg="Your Category Delete Done!";
    header("Location: category-list.php?msg=".$msg);
}
else{
    $msg="Your Category Delete NOT Done, Sorry";
    header("Location: category-list.php?msg=".$msg);
}



?>