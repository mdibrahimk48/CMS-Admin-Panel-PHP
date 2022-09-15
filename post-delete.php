<?php
$id = $_GET["id"];

include("cms-crud.php");
$query = "DELETE FROM post WHERE id=$id";
$sql = cmsDelete($query);




if ($sql) {

    $msg = "Your Post Delete Done!";
    header("Location: post-list.php?msg=" . $msg);
} else {
    $msg = "Your Post Delete NOT Done, Sorry";
    header("Location: post-list.php?msg=" . $msg);
}
