<?php
	session_start();
	if($_SESSION['level']>=8){
		echo "<div style='height:100%'>
		<div style='float:left'>
		<img src='qimg/img/cos81.jpg'/>
		</div>
		<div name='blank' style='height:200px; width:3%;float:left'/>";

		echo "<div style='float:left'>
		<img src='qimg/img/cos82.jpg'/>
		</div>
		<div name='blank' style='height:200px; width:3%;float:left'/>";

		echo "<div style='float:left'>
		<img src='qimg/img/cos83.jpg'/>
		</div>
		</div>";
	}
?>