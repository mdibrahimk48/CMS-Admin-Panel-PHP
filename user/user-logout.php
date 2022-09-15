<?php
session_start();
session_destroy();

$msg="Log Out Success";
header("Location: ../login.php?msg=".$msg);
