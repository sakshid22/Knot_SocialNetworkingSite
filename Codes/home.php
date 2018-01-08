<html>
    <head>
        <?php
            include("commenhead.php");
            ?>
    </head>
    <body>
        <div id="topBar">
            <?php
            include("commonmenu.php");
           include("../include/config.php");
echo "<form name='homey1' method='POST' action='change.php'>Status<textarea row=10 column=10 name='post' Required></textarea><input type='hidden' value='$_SESSION[userid]' name=uid><input type='submit' value='Post'></form><br><br>";
     
     $res=mysql_query("select * from status  order by(date) desc,(time) desc");
     $cnt=mysql_num_rows($res);
     for($i=0;$i<$cnt;$i++)
     {
       
	$a1=mysql_result($res,$i,"uid");
         $cmd="select * from usermaster where userid='$a1'";
        $rst=mysql_query($cmd);
        $row=mysql_fetch_array($rst);
        echo "<img src='../$row[4]' height=30px width=30px>";
        $a=$row[2];
	$b=mysql_result($res,$i,"status");
	 $c=mysql_result($res,$i,"time");
        $d=mysql_result($res,$i,"date");
          $e=mysql_result($res,$i,"uid");
         $s=mysql_result($res,$i,"sno");
	echo"<a href=openprofile.php?id=$row[0]><font color=green>".$a.": </font></a>".$b ."<br><font color=green size=1.5px>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp".$d." at ". $c."</font><br><b><i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href='views.php?n=$s'><font color=green>views</a></i></b></font><br>";
echo "<form name='view' method='post' action='view.php'><input type='hidden' value='$_SESSION[userid]' name='uid'><input type='hidden' value='$e' name='fid'><input type='hidden' value='$s' name='sno'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font color=green><i><textarea row=10 column=10 placeholder='your view' name='view' Required></textarea></i></font><input type='submit' value='post'></form><br><br>";

//     }
     }


            ?>
        </div>
    </body>
</html>

