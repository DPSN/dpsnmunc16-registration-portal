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
        <form method="POST" action="savechanges.php" id="ebapp">
            <table>
                <tr>
                    <th>Name</th><th>Email</th><th>Phone</th><th>Date of Birth</th><th>Institution Name</th><th>Delegate Experience</th><th>Chairperson Experience</th><th>Achievements</th><th>More</th><th>Confirmation</th>
                </tr>
        <?php
        include_once("../db.php");
        $sql = "SELECT * FROM `ebapp`;";
        $res = mysqli_query($db, $sql);
        while($ar = mysqli_fetch_array($res)) {
            $id = $ar['id'];
            $name = $ar['fname']." ".$ar['lname'];
            $email = $ar['email'];
            $number = "+91".$ar['number'];
            $dob = $ar['dob'];
            $insti = $ar['institution'];
            $delexp = $ar['delexp'];
            $chairexp = $ar['chairexp'];
            $achieved = $ar['achievement'];
            $else = $ar['else'];
            $confirm = $ar['confirmed'];
            print("<tr><td>$name</td><td><a href=\"mailto:$email\">$email</a></td><td>$number</td><td>$dob</td><td>$insti</td><td>$delexp</td><td>$chairexp</td><td>$achieved</td><td>$else</td>");
            if($confirm == "yes") {
                print("<td><input type=\"checkbox\" name=\"confirmation[]\" checked=\"checked\ value=\"$id\"></td></tr>\n");
            }
            else {
                print("<td><input type=\"checkbox\" name=\"reg".$id."\"></td></tr>\n");
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