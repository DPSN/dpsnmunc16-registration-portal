<!doctype html>
<html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
        <title>Registration Information Panel | Delhi Public School Newtown Model United Nations Conference 2016</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../scripts/base.css">
    </head>
    <body>
        <h1>Registration Information Panel</h1>
        <h2>Individual Delegation Applicants</h2>
        <form method="POST" action="savechanges.php">
            <table>
                <tr>
                    <th>Name</th><th>Email</th><th>Phone</th><th>Date of Birth</th><th>Institution Name</th><th>Delegate Experience</th><th>Achievements</th><th>More</th><th>Confirmation</th>
                </tr>
        <?php
        include_once("../db.php");
        $sql = "SELECT * FROM `indidelapp`;";
        $res = mysqli_query($db, $sql);
        while($ar = mysqli_fetch_array($res)) {
            $id = $ar['id'];
            $name = $ar['fname']." ".$ar['lname'];
            $email = $ar['email'];
            $number = "+91".$ar['number'];
            $dob = $ar['dob'];
            $insti = $ar['institution'];
            $delexp = $ar['delexp'];
            $achieved = $ar['achievement'];
            $else = $ar['else'];
            $confirm = $ar['confirmed'];
            print("<tr><td>$name</td><td><a href=\"mailto:$email\">$email</a></td><td>$number</td><td>$dob</td><td>$insti</td><td>$delexp</td><td>$achieved</td><td>$else</td>");
            if($confirm == "yes") {
                print("<td>");
                print("<input type=\"radio\" name=\"$id\" checked=\"checked\" value=\"yes\">Confirmed</input>");
                print("<input type=\"radio\" name=\"$id\" value=\"no\">Not Confirmed</input></td></tr>\n");
            }
            else {
                print("<td>");
                print("<input type=\"radio\" name=\"$id\" value=\"yes\">Confirmed</input>");
                print("<input type=\"radio\" name=\"$id\" checked=\"checked\" value=\"no\">Not Confirmed</input></td></tr>\n");
            }
        }
        
        ?>
            </table>
            <button type="submit">Update Confirmations</button>
        </form>
        <!--Table ends-->
        <br/>
        <hr>
        <br/>
        <!--Table starts-->
        <form method="POST" action="savechanges2.php">
            <table>
                <tr>
                    <th>Name 1</th><th>Email 1</th><th>Phone 1</th><th>Date of Birth 1</th><th>Institution Name 1</th><th>Delegate Experience 1</th><th>Achievements 1</th><th>More 1</th><th>Name 2</th><th>Email 2</th><th>Phone 2</th><th>Date of Birth 2</th><th>Institution Name 2</th><th>Delegate Experience 2</th><th>Achievements 2</th><th>More 2</th><th>Confirmation</th>
                </tr>
        <?php
        include_once("../db.php");
        $sql = "SELECT * FROM `indidelapp2`;";
        $res = mysqli_query($db, $sql);
        while($ar = mysqli_fetch_array($res)) {
            $id = $ar['id'];
            $name1 = $ar['fname1']." ".$ar['lname1'];
            $email1 = $ar['email1'];
            $number1 = "+91".$ar['number1'];
            $dob1 = $ar['dob1'];
            $insti1 = $ar['institution1'];
            $delexp1 = $ar['delexp1'];
            $achieved1 = $ar['achievement1'];
            $else1 = $ar['else1'];
            $name2 = $ar['fname2']." ".$ar['lname2'];
            $email2 = $ar['email2'];
            $number2 = "+91".$ar['number2'];
            $dob2 = $ar['dob2'];
            $insti2 = $ar['institution2'];
            $delexp2 = $ar['delexp2'];
            $achieved2 = $ar['achievement2'];
            $else2 = $ar['else2'];
            $confirm = $ar['confirmed'];
            print("<tr><td>$name1</td><td><a href=\"mailto:$email1\">$email1</a></td><td>$number1</td><td>$dob1</td><td>$insti1</td><td>$delexp1</td><td>$achieved1</td><td>$else1</td><tr><td>$name2</td><td><a href=\"mailto:$email2\">$email2</a></td><td>$number2</td><td>$dob2</td><td>$insti2</td><td>$delexp2</td><td>$achieved2</td><td>$else2</td>");
            if($confirm == "yes") {
                print("<td>");
                print("<input type=\"radio\" name=\"$id\" checked=\"checked\" value=\"yes\">Confirmed</input>");
                print("<input type=\"radio\" name=\"$id\" value=\"no\">Not Confirmed</input></td></tr>\n");
            }
            else {
                print("<td>");
                print("<input type=\"radio\" name=\"$id\" value=\"yes\">Confirmed</input>");
                print("<input type=\"radio\" name=\"$id\" checked=\"checked\" value=\"no\">Not Confirmed</input></td></tr>\n");
            }
        }
        
        ?>
            </table>
            <button type="submit">Update Confirmations</button>
        </form>
        <br/>
        <footer>
          &copy; Delhi Public School Newtown Model United Nations Conference 2016.<br/>
          Designed and Developed by <a href="https://facebook.com/swghosh">SwG Ghosh</a>.<br/>
          <a href="https://twitter.com/SwG_Ghosh" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @SwG_Ghosh</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script><br/>
        </footer>
    </body>
</html>