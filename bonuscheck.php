<?php

	session_start();
	
	include 'dbconnect.php';
	//echo($_SESSION['level']);
	
	date_default_timezone_set('Asia/Kolkata');
	$today = date("Y-m-d H:i:s");
	//$today=strtotime($today);
	//echo $today;

    
	$ans=mysqli_real_escape_string($con,$_REQUEST['answer']);
	$ans = strtolower(preg_replace('/\s+/', '', $ans));
	
    $query="select * from bonusqna where qno='".$_SESSION['bonuslvl']."'";

	$res=mysqli_query($con,$query) or die("Unexpected error occurred.Please contact the admin.");
	$row=mysqli_fetch_assoc($res);
	//echo $row['answer'];
	$answer=$row['answer'];
	if($ans == $answer)
	{	
		$query="UPDATE crown1 set bonuspoint = bonuspoint+989 where email='".$_SESSION['email']."'";
		
		//
	//	$query="START TRANSACTION; UPDATE crown1 set level = level+1, points = points+100 where email='".$_SESSION['email']."';UPDATE levelusers SET users = users + 1 where level = ".$lev.";COMMIT;";
		mysqli_query($con,$query);// or die(mysqli_error($con));
		//$_SESSION['level']=$nlev;//to be modified0
		
		
		
					
		$nts="bonus".$_SESSION['bonuslvl'];
		//echo $nts;
        $query="UPDATE crown1 SET ".$nts."= NOW() where email='".$_SESSION['email']."';";  
        mysqli_query($con,$query);// or die(mysqli_error($con));
        $res2=mysqli_query($con,"SELECT * from crown1 WHERE email='".$_SESSION['email']."';");
        $row2=mysqli_fetch_assoc($res2);
        $times=$row2[$nts];
        $points2=$row2['points'];
        $rank2=$row2['rank'];
        $_SESSION['rank']=$rank2;
        $_SESSION['points']=$points2;
        $_SESSION['timest']=$times;//
		$result = mysqli_query($con,"SELECT SUM(users) AS value_sum FROM levelusers"); 
                    $row = mysqli_fetch_assoc($result); 
                    $sum = $row['value_sum'];
                    $nousers =$sum;
        $_SESSION['nousers']=$nousers;//
        $resque=mysqli_query($con,"SELECT * FROM qna WHERE level=".$_SESSION['level'].";");
        $rowque=mysqli_fetch_assoc($resque);
                    $title=$rowque['title'];
                    $qn=$rowque['qnlink'];
                    $_SESSION['title']=$title;//
                    $_SESSION['qnlink']=$qn;//
        
		$_SESSION['bonus1']='off';
		echo json_encode(array("codex"=>"10","codexskip"=>"30"));
	}
	else
	echo json_encode(array("codex"=>"20"));
?>