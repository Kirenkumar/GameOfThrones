<?php
	session_start();
	if($_SESSION['level']>=16){
		echo "<div style='height:100%'>
		<div name='blank' style='height:300px; width:20%;float:left'/>
		<div style='float:left'>
		<img src='qimg/img/cos161.jpg'/>
		</div>
		<div name='blank' style='height:300px; width:3%;float:left'/>";
		echo "<div style='float:left'>
		<img src='qimg/img/cos162.jpg'/>
		</div>
		</div>";
	}
?>