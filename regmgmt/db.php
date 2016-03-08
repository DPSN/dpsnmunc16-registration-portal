<?php
//Set database settings
$host = getenv("OPENSHIFT_MYSQL_DB_HOST");
$username = "admin";
$password = "tomcat2k16";
$database = "dpsnmunc";
//-----------------------------
$db = mysqli_connect($host, $username, $password, $database) or die();
