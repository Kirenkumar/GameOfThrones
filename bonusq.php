<?php
include('dbconnect.php');
session_start();
//Edits
date_default_timezone_set('Asia/Kolkata');
$today = date("d-m-Y H:i:s");
#echo $today;
$query_bonus="SELECT * from `bonusqna` ";
$res_user=mysqli_query($con,$query_bonus) or die("Error in query");
while($row=mysqli_fetch_array($res_user,MYSQLI_ASSOC))
{
if ((strtotime($today) >= strtotime($row['datets'])) && (strtotime($today) <= strtotime($row['datete'])))
{
        $res2=mysqli_query($con,"SELECT * from crown1 WHERE email='".$_SESSION['email']."';");
        $row2=mysqli_fetch_assoc($res2);
        $nts="bonus".$row['qno'];
        if($row2[$nts]=='0000-00-00 00:00:00')
        {
     $_SESSION['qnlink']=$row['qnlink'];
     $_SESSION['title']=$row['title'];
     $_SESSION['bonus1']="on";
     $_SESSION['bonuslvl']=$row['qno'];
        }
}
}
if($_SESSION['bonus1'] == "on"){
    echo json_encode(array('title'=>$_SESSION['title'],'qnlink'=>$_SESSION['qnlink'],'codex'=>'10'));
}
else{
    echo json_encode(array('codex'=>'20'));
}
?>