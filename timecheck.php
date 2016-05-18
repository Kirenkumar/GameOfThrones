
	$level=$_SESSION['level'];
	$query="select * from crown1 where email='".$_SESSION['email']."'";
	$res=mysqli_query($con,$query) or die("Unexpected error occurred.Please contact the admin.");
	$row=mysqli_fetch_assoc($res);
	/*To check if its the first entry*/
	$sql="select * from blockedusers where email='".$_SESSION['email']."'";
	$res1=mysqli_query($con,$sql) or die("Unexpected error occurred.Please contact the admin.");
	$rowcount=mysqli_num_rows($res1);

	if($level==0)
	$t1=0;
	else
	$t1='time'.($level-1);
	$t2='time'.($level);
	//if($level==3)
	$datetime1=$row[$t1];
	$datetime2=$row[$t2];
	$timing1 = strtotime($datetime2);
	$timing2 = strtotime($datetime1);
	$timediff=round(abs($timing2 - $timing1) / 60,2);
	if($timediff<1 && $rowcount==0)
	{
		$query1="Insert into blockedusers(email,blockedst,count) VALUES('{$_SESSION['email']}','yes',1)";
	    mysqli_query($con,$query1) or die ("error");
	}
 	else
 	{
 		$query2="UPDATE blockedusers set count = count+1 where email='".$_SESSION['email']."'";
 		mysqli_query($con,$query2) or die ("error");
 	}

