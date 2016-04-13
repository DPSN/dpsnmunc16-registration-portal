<!doctype html>
<html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
        <title>Individual Delegate Application | Delhi Public School Newtown Model United Nations Conference 2016</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../scripts/normalize.css">
        <script src="../scripts/formvalidate.js"></script>
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

//Form data handling
$fname = mysqli_real_escape_string($db, htmlspecialchars($_POST['firstname']));
$lname = mysqli_real_escape_string($db, htmlspecialchars($_POST['lastname']));
$email = mysqli_real_escape_string($db, htmlspecialchars($_POST['email']));
$number = mysqli_real_escape_string($db, htmlspecialchars($_POST['number']));
$dob = mysqli_real_escape_string($db, htmlspecialchars($_POST['dob']));
$institution = mysqli_real_escape_string($db, htmlspecialchars($_POST['institution']));
$achievement = mysqli_real_escape_string($db, htmlspecialchars($_POST['achievement']));
$experience = mysqli_real_escape_string($db, htmlspecialchars($_POST['experience']));
$else = mysqli_real_escape_string($db, htmlspecialchars($_POST['more']));
$committee = htmlspecialchars($_POST['committee']);

if($committee == "security council" || $committee == "general assembly") {
    //start of form 2
    //double delegate
    ?>
    <form id="ebform" action="indidelapply2.php" method="POST" onsubmit="return form_validate()">
        <?php
        $str = "<input type=\"hidden\" name=\"firstname1\" value=\"$fname\" />
                <input type=\"hidden\" name=\"lastname1\" value=\"$lname\" />
                <input type=\"hidden\" name=\"email1\" value=\"$email\" />
                <input type=\"hidden\" name=\"number1\" value=\"$number\" />
                <input type=\"hidden\" name=\"dob1\" value=\"$dob\" />
                <input type=\"hidden\" name=\"institution1\" value=\"$institution\" />
                <input type=\"hidden\" name=\"achievement1\" value=\"$achievement\" />
                <input type=\"hidden\" name=\"experience1\" value=\"$experience\" />
                <input type=\"hidden\" name=\"committee\" value=\"$committee\" />";
         echo($str);
        ?>      
        <h1><br/><a href="http://register.dpsnmunc.in"><img src="../cred.png" width="100%"/></a><br/>Individual Delegate<br/>Application</h1>
        
        <fieldset>
            <legend><span class="number">3</span>We need to know your co-delegate</legend>
            Name
            <input type="text" class="firstname" name="firstname2" placeholder="first name" required="required" />
            <input type="text" class="lastname" name="lastname2" placeholder="last name" required="required" /><br/>
            Email
            <input type="email" class="email" name="email2" placeholder="email address" required="required" /><br/>
            Contact Number
            +91 <input type="number" name="number2" placeholder="XXXXXXXXXX" id="number" required="required" /><br>
            Date of Birth
            <input type="date" name="dob2" class="dob" placeholder="dd/mm/yyyy" required="required" /><br/>
            Name of Institution
            <input type="text" class="institution" name="institution2" placeholder="institution name" required="required" /><br/>
        </fieldset>
        
        <fieldset>
            <legend><span class="number">4</span>Other Details</legend>
            Your Achievements<br/>
            <textarea class="achievement" name="achievement2" placeholder="how do you stand out?"></textarea><br/>
            Previous Model UN Experience as a Delegate<br/>
            <textarea class="experience" name="experience2" placeholder="share your experiences"></textarea><br/>
            Anything Else<br/>
            <textarea class="more" name="more2" placeholder="tell us..."></textarea><br/>
        </fieldset>
        
        <button type="submit">Apply</button>
      </form>
      <br/>
      <footer>
          &copy; Delhi Public School Newtown Model United Nations Conference 2016.<br/>
          Designed and Developed by <a href="https://facebook.com/swghosh">Swarup Ghosh</a>.<br/>
          <a href="https://twitter.com/SwG_Ghosh" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @SwG_Ghosh</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script><br/>
      </footer>    
    <?php
    //form 2 ends
}
else {
    //in case of single delegate
    $sql = "INSERT INTO `indidelapp` (`fname`, `lname`, `email`, `number`, `dob`, `institution`, `achievement`, `experience`, `else`, `committee`) VALUES ('".$fname."', '".$lname."', '".$email."', '".$number."', '".$dob."', '".$institution."', '".$achievement."', '".$experience."', '".$else."', '".$committee."');";
    if(mysqli_query($db, $sql) == false) {
        die("Form Data Submission Error.");
     }
?>
        <form id="ebform" action="">
      
        <h1><br/><a href="http://register.dpsnmunc.in"><img src="../cred.png" width="100%"/></a><br/>Individual Delegate<br/>Application</h1>
        <br/>
        Welcome aboard! See you at the conference.
      </form>
      <br/>
      <footer>
          &copy; Delhi Public School Newtown Model United Nations Conference 2016.<br/>
          Designed and Developed by <a href="https://facebook.com/swghosh">Swarup Ghosh</a>.<br/>
          <a href="https://twitter.com/SwG_Ghosh" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @SwG_Ghosh</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script><br/>
      </footer>
<?php 
} 
?>
    </body>
</html>
    