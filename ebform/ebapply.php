<!doctype html>
<html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
        <title>Executive Board Application | Delhi Public School Newtown Model United Nations Conference 2016</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../scripts/normalize.css">
        <meta name="theme-color" content="#69F">
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
$sql = "INSERT INTO `ebapp` (`fname`, `lname`, `email`, `number`, `dob`, `institution`, `delexp`, `chairexp`, `achievement`, `else`) VALUES ('".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['email']."', '".$_POST['number']."', '".$_POST['dob']."', '".$_POST['institution']."', '".$_POST['experience1']."', '".$_POST['experience2']."', '".$_POST['achievement']."', '".$_POST['more']."');";
if(mysqli_query($db, $sql) == false) {
    die("Server Error.");
}
?>
        <form id="ebform" action="">
      
        <h1><br/><a href="http://register.dpsnmunc.in"><img src="../cred.png" width="100%"/></a><br/>Executive Board<br/>Application</h1>
        <br/>
        Application Successful.
      </form>
      <br/>
      <footer>
          &copy; Delhi Public School Newtown Model United Nations Conference 2016.<br/>
          Designed and Developed by <a href="https://facebook.com/swghosh">Swarup Ghosh</a>.<br/>
          <a href="https://twitter.com/SwG_Ghosh" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @SwG_Ghosh</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script><br/>
      </footer>
    </body>
</html>      