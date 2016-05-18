<?php
	session_start();
	if($_SESSION['level']>=19){
		echo "<div style='height:100%'>
		<div name='blank' style='height:270px; width:1%;float:left'/>
		<div style='float:left'>
		<img src='qimg/img/cos191.jpg'/>
		</div>
		<div name='blank' style='height:270px; width:1%;float:left'/>";

		echo "<div style='float:left'>
		<img src='qimg/img/cos192.png'/>
		</div>
		<div name='blank' style='height:270px; width:1%;float:left'/>";

		echo "<div style='float:left'>
		<img src='qimg/img/cos193.png'/>
		</div>
		</div>";
	}
?>