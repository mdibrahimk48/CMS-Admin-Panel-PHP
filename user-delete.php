<?php
$id=$_GET["id"];

include("cms-crud.php");
$query="DELETE FROM user WHERE id=$id";
$sql=cmsDelete($query);




if($sql){
    
    $msg="Your Account Delete Done!";
    header("Location: all-users.php?msg=".$msg);
}
else{
    $msg="Your Account Delete NOT Done, Sorry";
    header("Location: all-users.php?msg=".$msg);
}



?>