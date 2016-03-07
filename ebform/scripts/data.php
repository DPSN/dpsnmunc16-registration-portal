<pre>Data Available</pre>
<?php
include_once("../db.php");

$sql = "SELECT * FROM `ebapp`;";
$res = mysqli_query($db, $sql);
while($ar = mysqli_fetch_array($res)) {
    print_r($ar);
    print("<br/>");
}
die();