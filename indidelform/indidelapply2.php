<!doctype html>
<html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
        <title>Individual Delegate Application | Delhi Public School Newtown Model United Nations Conference 2016</title>
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
if(isset($_POST['firstname2']) == false || isset($_POST['lastname2']) == false || isset($_POST['email2']) == false || isset($_POST['number2']) == false || isset($_POST['dob2']) == false || isset($_POST['institution2']) == false) {
    form_error();
}

if(empty($_POST['firstname2']) || empty($_POST['lastname2']) || empty($_POST['email2']) || empty($_POST['number2']) || empty($_POST['dob2']) || empty($_POST['institution2'])) {
    form_error();
}

$cap_ar = array($_POST['firstname2'], $_POST['lastname2'], $_POST['institution2']);

foreach ($str as $cap_ar) {
    if(ctype_upper($str[0]) == false) {
        form_error();
    }
}

if(strlen($_POST['number2']) != 10) {
    form_error();
}

if(strpos($_POST['email2'], "@") == false || strpos($_POST['email2'], ".") == false) {
    form_error();
}

//Form data handling
$fname1 = mysqli_real_escape_string($db, htmlspecialchars($_POST['firstname1']));
$lname1 = mysqli_real_escape_string($db, htmlspecialchars($_POST['lastname1']));
$email1 = mysqli_real_escape_string($db, htmlspecialchars($_POST['email1']));
$number1 = mysqli_real_escape_string($db, htmlspecialchars($_POST['number1']));
$dob1 = mysqli_real_escape_string($db, htmlspecialchars($_POST['dob1']));
$institution1 = mysqli_real_escape_string($db, htmlspecialchars($_POST['institution1']));
$achievement1 = mysqli_real_escape_string($db, htmlspecialchars($_POST['achievement1']));
$experience1 = mysqli_real_escape_string($db, htmlspecialchars($_POST['experience1']));
$else1 = mysqli_real_escape_string($db, htmlspecialchars($_POST['more1']));
$fname2 = mysqli_real_escape_string($db, htmlspecialchars($_POST['firstname2']));
$lname2 = mysqli_real_escape_string($db, htmlspecialchars($_POST['lastname2']));
$email2 = mysqli_real_escape_string($db, htmlspecialchars($_POST['email2']));
$number2 = mysqli_real_escape_string($db, htmlspecialchars($_POST['number2']));
$dob2 = mysqli_real_escape_string($db, htmlspecialchars($_POST['dob2']));
$institution2 = mysqli_real_escape_string($db, htmlspecialchars($_POST['institution2']));
$achievement2 = mysqli_real_escape_string($db, htmlspecialchars($_POST['achievement2']));
$experience2 = mysqli_real_escape_string($db, htmlspecialchars($_POST['experience2']));
$else2 = mysqli_real_escape_string($db, htmlspecialchars($_POST['more2']));
$committee = htmlspecialchars($_POST['committee']);


$sql = "INSERT INTO `indidelapp2` (`fname1`, `lname1`, `email1`, `number1`, `dob1`, `institution1`, `achievement1`, `experience1`, `else1`, `fname2`, `lname2`, `email2`, `number2`, `dob2`, `institution2`, `achievement2`, `experience2`, `else2`, `committee`) VALUES ('".$fname1."', '".$lname1."', '".$email1."', '".$number1."', '".$dob1."', '".$institution1."', '".$achievement1."', '".$experience1."', '".$else1."', '".$fname2."', '".$lname2."', '".$email2."', '".$number2."', '".$dob2."', '".$institution2."', '".$achievement2."', '".$experience2."', '".$else2."', '".$committee."');";
if(mysqli_query($db, $sql) == false) {
    die("Form Data Submission Error.");
}
?>
        <form id="ebform" action="">
      
        <h1><br/><a href="http://register.dpsnmunc.in"><img src="../cred.png" width="100%"/></a><br/>Individual Delegate<br/>Application</h1>
        <br/>
        Application Successful.
      </form>
      <br/>
      <footer>
          &copy; Delhi Public School Newtown Model United Nations Conference 2016.<br/>
          Designed and Developed by <a href="https://facebook.com/Swaruphosh">Swarup Ghosh</a>.<br/>
          <a href="https://twitter.com/Swarup_Ghosh" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @Swarup_Ghosh</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script><br/>
      </footer>
    </body>
</html>
    