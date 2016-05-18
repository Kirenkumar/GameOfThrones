<?php
session_start();
include('dbconnect.php');

date_default_timezone_set('Asia/Kolkata');
$today = date("d-m-Y H:i:s");

$email=mysqli_real_escape_string($con,$_REQUEST["email"]);
$iidr=mysqli_real_escape_string($con,$_REQUEST["iid"]);
preg_match('/([\d]+)/', $iidr, $match);
#print_r($match);
$iid=$match[0]-4595;
//echo "IID :".$iid;
$query="SELECT * from `user` WHERE `email`='$email' and `id`='$iid'";
$res_user=mysqli_query($con,$query) or die("Error in connection");
$res_user_num=mysqli_num_rows($res_user);
$name="guest";
if($res_user_num == 0)
{    
     $query="SELECT * from `user` WHERE `email`='$email'";
     $res2_user=mysqli_query($con,$query) or die("Error in query");
     $res2_user_num=mysqli_num_rows($res2_user);
     if($res2_user_num>0){
          $code=3;
          //echo "Something";
          echo json_encode(array('name'=>$name,'code'=>$code));
     }
     else{
          $code=2;
          //echo "Other";
          echo json_encode(array('name'=>$name,'code'=>$code));
     }
}
else
{
     /*kiren*/
  $sql="SELECT * from `blockedusers` where email='$email'";
  $res=mysqli_query($con,$sql) or die("Error in block");
  $row=mysqli_fetch_assoc($res);
  if($row['count']>2)
  {
    $code=50;
  echo json_encode(array('name'=>$name,'code'=>$code));
  }/*laksh*/
  else
  {
     $code=1;
     $row = mysqli_fetch_assoc($res_user);
     $name=$row['name'];
     
     $query_crown1="select * from crown1 where email='".$email."';";
     $res_crown1=mysqli_query($con,$query_crown1);
     $res_crown1_num=mysqli_num_rows($res_crown1);

     if($res_crown1_num==0)
     {
          $res_levelusers = mysqli_query($con,"SELECT SUM(users) AS value_sum FROM levelusers"); 
          $row = mysqli_fetch_assoc($res_levelusers); 
          $sum = $row['value_sum'];
          $rank =$sum+1;
          $query2_crown1="INSERT INTO `crown1`(email,level,points,rank) values('$email',1,0,".$rank.")";
          $res2_crown1=mysqli_query($con,$query2_crown1) or die("Unexpected error. sorry.\n"+mysqli_error($con));
          echo $sum." here";
          $query_levelusers='UPDATE levelusers SET users =  users + 1 WHERE level = 1';
          mysqli_query($con,$query_levelusers) or die(mysqli_error($con));

     }
     $_SESSION['email']=$email;
     $_SESSION['name']=$name;
     $row=mysqli_fetch_array($res_crown1);
     $level=$row['level'];
     $_SESSION['level']=$level;
     $points=$row['points'];
     $rank=$row['rank'];
     $times="time".$level;
     $timest=$row[$times];
     $res2_levelusers = mysqli_query($con,"SELECT SUM(users) AS value_sum FROM levelusers"); 
     $row2_levelusers = mysqli_fetch_assoc($res2_levelusers); 
     $sum2_levelusers = $row2_levelusers['value_sum'];
     $nousers =$sum2_levelusers;
     $_SESSION['nousers']=$nousers;
     $res3_levelusers=mysqli_query($con,"SELECT * from levelusers where level = ".$_SESSION['level'].";");
     $row3_levelusers= mysqli_fetch_assoc($res3_levelusers);
     $leUsers=$row3_levelusers['users'];
     $_SESSION['leUsers']=$leUsers;
     $query_qna="select * from qna where level=".$level.";";
     $res_qna=mysqli_query($con,$query_qna);
     $row_qna=mysqli_fetch_array($res_qna);
     $title=$row_qna['title'];
     $qn=$row_qna['qnlink'];
     $_SESSION['title']=$title;
     $_SESSION['qnlink']=$qn;
     $_SESSION['points']=$points;
     $_SESSION['timest']=$timest;
     $_SESSION['rank']=$rank;
     $_SESSION['bonus1']="off";
     $_SESSION['bonuslvl']=0;  
$codex=10;
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
        //     echo "hi";
        $codex=10;
        break;
        }
}
}


     echo json_encode(array('name'=>$_SESSION['name'],'code'=>$code,'nousers'=>$_SESSION['nousers'],'users'=>$_SESSION['leUsers'],'title'=>$_SESSION['title'],'qnlink'=>$_SESSION['qnlink'],'level'=>$_SESSION['level'],'points'=>$_SESSION['points'],'rank'=>$_SESSION['rank'],'timest'=>$_SESSION['timest'],'codenoti'=>$codex));
     
     }
   }

?>