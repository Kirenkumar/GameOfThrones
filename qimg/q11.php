<?php
	session_start();
	if($_SESSION['level']>=11){
		echo "<div style='height:100%'>
		<div name='blank' style='height:250px; width:1%;float:left'/>
		<div style='float:left'>
		<img src='qimg/img/cos111.jpg'/>
		</div>
		<div name='blank' style='height:250px; width:1%;float:left'/>";
		echo "<div style='float:left'>
		<img src='qimg/img/cos112.jpg'/>
		</div>
		</div>";
	}
?>