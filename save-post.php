<?php


include("cms-crud.php");
include("file-upload-system.php");

$title = $_POST["title"];
$short_description = $_POST["short_description"];
$long_description = $_POST["long_description"];
$category_id = $_POST["category_id"];
$feature_image = imageUpload($_FILES["feature_image"]);


//

$query = "INSERT INTO post(title, short_description, long_description, category_id, feature_image) 
VALUES ('$title', '$short_description', '$long_description', '$category_id', '$feature_image')";


$sql = cmsInsert($query, "Sorry Some Thing Missing");

    if ($sql) {
        $msg = "Your Post Create Done";
        header("Location: post-list.php?msg=" .$msg);
    } else {
        $msg = "Your post Create Not Done, Sorry Try Again";
        header("Location: add-post.php?msg=" .$msg);
}