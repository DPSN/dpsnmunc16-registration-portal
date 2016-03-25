<!doctype html>
<html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
        <title>Photography and Videography Application | Delhi Public School Newtown Model United Nations Conference 2016</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../scripts/normalize.css">
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

if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['number']) || empty($_POST['dob']) || empty($_POST['institution'])) {
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
$fname = mysqli_real_escape_string($db, htmlspecialchars($_POST['firstname']));
$lname = mysqli_real_escape_string($db, htmlspecialchars($_POST['lastname']));
$email = mysqli_real_escape_string($db, htmlspecialchars($_POST['email']));
$number = mysqli_real_escape_string($db, htmlspecialchars($_POST['number']));
$dob = mysqli_real_escape_string($db, htmlspecialchars($_POST['dob']));
$institution = mysqli_real_escape_string($db, htmlspecialchars($_POST['institution']));
$achievement = mysqli_real_escape_string($db, htmlspecialchars($_POST['achievement']));
$experience1 = mysqli_real_escape_string($db, htmlspecialchars($_POST['experience1']));
$experience2 = mysqli_real_escape_string($db, htmlspecialchars($_POST['experience2']));
$else = mysqli_real_escape_string($db, htmlspecialchars($_POST['more']));
$sql = "INSERT INTO `photoapp` (`fname`, `lname`, `email`, `number`, `dob`, `institution`, `achievement`, `workshopexp`, `eventexp`, `else`) VALUES ('".$fname."', '".$lname."', '".$email."', '".$number."', '".$dob."', '".$institution."', '".$achievement."', '".$experience1."', '".$experience2."', '".$else."');";
if(mysqli_query($db, $sql) == false) {
    die("Form Data Submission Error.");
}
?>
        <pre>Application Successful</pre>
    </body>
</html>      