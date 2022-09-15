<?php

include("cms-crud.php");
include("file-upload-system.php");

$title = $_POST["title"];
$short_description = $_POST["short_description"];
$long_description = $_POST["long_description"];
$category_id = $_POST["category_id"];
$feature_image = imageUpload($_FILES["feature_image"]);
// $feature_image = ($_FILES["feature_image"]);

$id = $_POST["id"];


$query = "UPDATE post SET title='$title', short_description='$short_description' , long_description='$long_description', category_id='$category_id', feature_image='$feature_image' WHERE id=$id";

$sql = cmsUpdate($query, "Sorry Some Thing Missing");


if ($sql) {

        $msg = "Your Post Update Done!";
        header("Location: post-list.php?msg=" . $msg);
    } else {
        $msg = "Your Post Update NOT Done, Sorry";
        header("Location: post-list.php?msg=" . $msg);
}

