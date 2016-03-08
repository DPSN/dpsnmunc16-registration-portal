<?php
if(isset($_POST) == false) {
    die("Something Went Wrong!");
}
include_once('../db.php');
foreach ($_POST as $id => $value) {
    if($value == 'yes') {
        $sql = "UPDATE `ebapp` SET `confirmed` = 'yes' WHERE `id`=$id;";
    }
    else {
        $sql = "UPDATE `ebapp` SET `confirmed` = 'no' WHERE `id`=$id;";
    }
    mysqli_query($db, $sql);
}
header('Location: ./');