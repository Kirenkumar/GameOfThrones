<?php
	session_start();
	if($_SESSION['level']>=2){
		echo "<div style='height:100%'>
		<div style='float:left'>
		<img src='qimg/img/cos21.jpg'/>
		</div>
		<div name='blank' style='height:266px; width:1.5%;float:left'/>";
		echo "<div style='float:left'>
		<img src='qimg/img/cos22.jpg'/>
		</div>
		</div>";
	}
?>