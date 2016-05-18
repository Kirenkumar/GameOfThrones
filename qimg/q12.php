<?php
	session_start();
	if($_SESSION['level']>=12){
		echo "<div style='height:100%'>
		<div name='blank' style='height:200px; width:1%;float:left'/>
		<div style='float:left'>
		<img src='qimg/img/cos121.jpg'/>
		</div>
		<div name='blank' style='height:200px; width:1%;float:left'/>";

		echo "<div style='float:left'>
		<img src='qimg/img/cos122.jpg'/>
		</div>
		<div name='blank' style='height:200px; width:1%;float:left'/>";

		echo "<div style='float:left'>
		<img src='qimg/img/cos123.jpg'/>
		</div>
		</div>";
	}
?>