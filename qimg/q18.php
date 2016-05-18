<?php
	session_start();
	if($_SESSION['level']>=1){
		echo "<div style='height:100%'>
		<div name='blank' style='height:220px; width:5%;float:left'/>
		<div style='float:left'>
		<img src='qimg/img/cos181.jpg'/>
		</div>
		<div name='blank' style='height:220px; width:5%;float:left'/>";

		echo "<div style='float:left'>
		<img src='qimg/img/cos182.jpg'/>
		</div>
		<div name='blank' style='height:220px; width:5%;float:left'/>";

		echo "
		<div name='blank' style='height:200px; width:2%;float:left'/>
		<div style='float:left'>
		<img src='qimg/img/cos183.jpg' alt='mPxy5T1HSrY'/>
		</div>
		</div>";
	}
?>