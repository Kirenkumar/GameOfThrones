<?php
	session_start();
	if($_SESSION['level']>=3){
		echo "<div style='height:100%'>
		<div name='blank' style='height:270px; width:0%;float:left'/>
		<div style='float:left'>
		<img src='qimg/img/cos31.jpg'/>
		</div>
		<div name='blank' style='height:270px; width:0%;float:left'/>";

		echo "<div style='float:left'>
		<img src='qimg/img/cos32.jpg'/>
		</div>
		<div name='blank' style='height:270px; width:0%;float:left'/>";

		echo "<div style='float:left'>
		<img src='qimg/img/cos33.jpg'/>
		</div>
		</div>";
	}
?>