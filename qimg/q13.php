<?php
	session_start();
	if($_SESSION['level']>=13){
		echo "<div style='height:100%'>
		<div name='blank' style='height:270px; width:0%;float:left'/>
		<div style='float:left'>
		<img src='qimg/img/cos131.jpg'/>
		</div>
		<div name='blank' style='height:270px; width:0%;float:left'/>";

		echo "<div style='float:left'>
		<img src='qimg/img/cos132.jpg'/>
		</div>
		<div name='blank' style='height:270px; width:0%;float:left'/>";

		echo "<div style='float:left'>
		<img src='qimg/img/cos133.jpg'/>
		</div>";

		echo "<div style='float:left'>
		<img src='qimg/img/cos134.jpg'/>
		</div>

		</div>";
	}
?>