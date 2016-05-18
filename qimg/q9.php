<?php
	session_start();
	if($_SESSION['level']>=9){
		echo "<div style='height:100%'>
		<div name='blank' style='height:250px; width:5%;float:left'/>
		<div style='float:left'>
		<img src='qimg/img/cos91.jpg'/>
		</div>
		<div name='blank' style='height:250px; width:5%;float:left'/>";
		echo "<div style='float:left'>
		<img src='qimg/img/cos92.png'/>
		</div>
		</div>";
	}
?>