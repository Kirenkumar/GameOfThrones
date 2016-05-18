<?php
	session_start();
	include 'dbconnect.php';
	$data=array();
	
	if(isset($_SESSION['email']))
	{
	$res2_levelusers = mysqli_query($con,"SELECT SUM(users) AS value_sum FROM levelusers"); 
    $row2_levelusers = mysqli_fetch_assoc($res2_levelusers); 
    $sum2_levelusers = $row2_levelusers['value_sum'];
    $nousers =$sum2_levelusers;
    $res3_levelusers=mysqli_query($con,"SELECT * from levelusers where level = ".$_SESSION['level'].";");
    $row3_levelusers= mysqli_fetch_assoc($res3_levelusers);
    $leUsers=$row3_levelusers['users'];

    $data = array(
    'title' => $_SESSION['title'], 
    'rank' => $_SESSION['rank'],
    'points' => $_SESSION['points'],
    'level' => $_SESSION['level'],
    'qnlink' => $_SESSION['qnlink'],
    'nousers' => $nousers,
    'users' => $leUsers,
    'timest' => $_SESSION['timest']
       );
	}
	else{
		$data = array(
    'title' => 'Please Refresh The Page!!!!', 
    'rank' => '',
    'points' => '',
    'level' => '',
    'qnlink' => 'qimg/welcome.php',
    'nousers' => '',
    'users' => '',
    'timest' => ''
       );
	}
  echo json_encode($data);                    //$rank=$row['name'];
 // echo $rank; 
?>