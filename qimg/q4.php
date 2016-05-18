<?php
	session_start();
	if($_SESSION['level']>=4){
		echo "<div style='height:100%'>
		<div>
		<div style='float:left'>
		<img style='width:100%' src='qimg/img/cos41.jpg'/>
		</div>
		</div>
		";

		echo "<div style='float:left'>
		<img src='qimg/img/cos42.jpg'/>
		</div>
		<div name='blank' style='height:270px; width:6%;float:left'/>";

		echo "<div style='float:left'>
		<img src='qimg/img/cos43.jpg'/>
		</div>
		<div name='blank' style='height:270px; width:6%;float:left'/>
		";

		echo "<div style='float:left'>
		<img src='qimg/img/cos44.jpg'/>
		</div>
		</div>";
	}
?>