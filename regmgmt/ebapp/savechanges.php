<?php
if(isset($_POST) == false || isset($_POST['confirmation']) == false) {
    die("Something Went Wrong!");
}
include_once('db.php');
foreach ($id as $_POST['confirmation']) {
    if($id == '' || isset($id) == false) {
        $sql = "UPDATE `ebapp` SET `confirmed` = 'no' WHERE `id`=$id;";
    }
    else {
        $sql = "UPDATE `ebapp` SET `confirmed` = 'yes' WHERE `id`=$id;";
    }
    mysqli_query($db, $sql);
}
header('Location: ./');