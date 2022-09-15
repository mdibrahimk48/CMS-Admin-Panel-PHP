<?php
include("config.php");

$link = mysqli_connect($hostname, $username, $password, $dbname);

// function cmsInsert($query, $suc_msg="Success",$error_msg="Not Success" )

function cmsInsert($query, $suc_msg="Success",$error_msg="Not DB Connect" )
{

    global $link;
    if ($link) {

       
         $sql = mysqli_query($link, $query);

        if ($sql) {

            return $sql;
        } else {

            return $sql;
        }
    } else {
        return $error_msg;
    }
}

function cmsUpdate($query, $error_msg="Not DB Connect" )
{

    global $link;
    if ($link) {

       
        $sql=mysqli_query($link, $query);

        if ($sql) {

            return $sql;
        } else {

            return $sql;
        }
    } else {
        return $error_msg;
    }
}
function cmsDelete($query, $error_msg="Not DB Connect" )
{

    global $link;
    if ($link) {

       
        $sql=mysqli_query($link, $query);

        if ($sql) {

            return $sql;
        } else {

            return $sql;
        }
    } else {
        return $error_msg;
    }
}

function cmsSecletByColumn($query, $error_msg="Not DB Connect"){
    
    global $link;
    if ($link) {

       
        $sql = mysqli_query($link, $query);
        return $sql;
       
    } else {
        return $error_msg;
    }
}

function getAllDate($query, $error_msg="Not DB Connect"){
    
    global $link;
    if ($link) {

       
        $sql = mysqli_query($link, $query);
        return $sql;
       
    } else {
        return $error_msg;
    }
}


?>
<?php
?>