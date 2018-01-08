<?php
session_start();
include("include/config.php");
$fbid = $_POST["facebookId"];
$username = $_POST["name"];
$userpassword = "";
$useremail = "";
$$userid = "";
$googleid = "";
$googleDP = "";
$pic = "https://graph.facebook.com/" . $fbid . "/picture?width=150&amp;height=150";

$cmd = "select count(*) from usermaster where fbid = '$fbid'";
$rst = mysql_query($cmd);
$row = mysql_fetch_array($rst);

//echo $row[0];

if ($row[0] == 0) {
    //echo "Pic".$pic;
    $cmd2 = "insert into usermaster() values(NULL, '$userpassword','$username','$useremail','$pic',CURDATE(), '$fbid', '$googleid', '$googleDP')";
    $rst2 = mysql_query($cmd2);

    $cmd = "select * from usermaster where fbid = '$fbid'";
    $rst = mysql_query($cmd);
    $row = mysql_fetch_array($rst);


    $_SESSION["userid"] = $row[0];
    $_SESSION["userpic"] = $row[4];
    $_SESSION["username"] = $row[2];
    $_SESSION["fbid"] = $row[6];
    //header('Location:userpages/home.php');
} else {

    $cmd = "select * from usermaster where fbid = '$fbid'";
    $rst = mysql_query($cmd);
    $row = mysql_fetch_array($rst);
    $_SESSION["userid"] = $row[0];
    $_SESSION["userpic"] = $row[4];
    $_SESSION["username"] = $row[2];
    $_SESSION["fbid"] = $row[6];
    //header('Location:userpages/home.php');
}

?>