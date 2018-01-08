<?php 

session_start();
if(isset($_GET["status"]))
{
	
	setcookie("userid","",time()-3600);
	setcookie("userpic","",time()-3600);
}
else
{
if(isset($_COOKIE["userid"]))
{
	
	$_SESSION["userpic"]=$_COOKIE["userpic"];
	$_SESSION["userid"]=$_COOKIE["userid"];
	
	
	header("Location:userpages/home.php");	
}
}
include("include/config.php");
$useremail=$_POST["useremail"];
$userpassword=sha1($_POST["userpassword"]);
$cmd="select * from usermaster where useremail='$useremail' and userpass='$userpassword'";
$rst=mysql_query($cmd);
$row=mysql_fetch_array($rst);
if($row==0)
{
	header("Location:index.php?status=invalid");
	
}
else
{
	if(isset($_POST["rem"]))
	{
		setcookie("userid",$row[0],time()+3600);
		setcookie("userpic",$row[4],time()+3600);
		
	}
	
	$_SESSION["userid"]=$row[0];
	$_SESSION["userpic"]=$row[4];
        $_SESSION["username"]=$row[2];
	header("Location:userpages/home.php");
	
}
?>





