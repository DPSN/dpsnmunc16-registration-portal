<!doctype html>
<html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
        <title>Executive Board Application | Delhi Public School Newtown Model United Nations Conference 2016</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="scripts/normalize.css">
        <script src="scripts/formvalidate.js"></script>
    </head>
    <body>
<?php
include_once("db.php");

function form_error() {
    die("Invalid Information, Try again...");
}

//Form Validation
if(isset($_POST['firstname']) == false || isset($_POST['lastname']) == false || isset($_POST['email']) == false || isset($_POST['number']) == false || isset($_POST['dob']) == false || isset($_POST['institution']) == false) {
    form_error();
}

if(empty($_POST['firstname']) == false || empty($_POST['lastname']) == false || empty($_POST['email']) == false || empty($_POST['number']) == false || empty($_POST['dob']) == false || empty($_POST['institution']) == false) {
    form_error();
}

$cap_ar = array($_POST['firstname'], $_POST['lastname'], $_POST['institution']);

foreach ($str as $cap_ar) {
    if(ctype_upper($str[0]) == false) {
        form_error();
    }
}

if(strlen($_POST['number']) != 10) {
    form_error();
}

if(strpos($_POST['email'], "@") == false || strpos($_POST['email'], ".") == false) {
    form_error();
}

//Data Entry into Database
$sql = "INSERT INTO `ebapp` (`fname`, `lname`, `email`, `number`, `dob`, `institution`, `delexp`, `chairexp`, `achievement`, `else`) VALUES ('".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['email']."', '".$_POST['number']."', '".$_POST['dob']."', '".$_POST['institution']."', '".$_POST['experience1']."', '".$_POST['experience2']."', '".$_POST['achievement']."', '".$_POST['more']."');";
if(mysqli_query($db, $sql) == false) {
    die("Server Error.");
}
?>
        <pre>Application Successful</pre>
    </body>
</html>      