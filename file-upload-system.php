<?php
function imageUpload($file_form_name)
{

    $file_name = $file_form_name["name"];
    // $file_size = $file_form_name["size"];
    // echo $file_size;
    // exit();

    $file_extension = explode(".", $file_name);
    $file_type = $file_extension[1];
    if ($file_type == "jpg" || $file_type == "png" || $file_type == "raw" || $file_type == "gif" || $file_type == "tiff" || $file_type == "jpeg") {


        $file_tmp = $file_form_name["tmp_name"];

        $file_destination = "uploads/" . $file_name;

        move_uploaded_file($file_tmp, $file_destination);

        return $file_destination;
    } else {
        return "Sorry does not match file extension";
    }
}
