<?php
	session_start();
	if($_SESSION['level']>=5){
		echo "<div style='height:100%'>
		<div name='blank' style='height:270px; width:0%;float:left'/>
		<div style='float:left'>
		<img src='qimg/img/cos51.jpg'/>
		</div>
		<div name='blank' style='height:270px; width:0%;float:left'/>";

		echo "<div style='float:left'>
		<img src='qimg/img/cos52.jpg'/>
		</div>
		<div name='blank' style='height:270px; width:0%;float:left'/>";

		echo "<div style='float:left'>
		<img src='qimg/img/cos53.png'/>
		</div>";

		echo "<div style='float:left'>
		<img src='qimg/img/cos54.jpg'/>
		</div>

		</div>";
	}
?>