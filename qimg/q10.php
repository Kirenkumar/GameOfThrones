<?php
	session_start();
	if($_SESSION['level']>=10){
		echo "<div style='height:100%'>
		<div style='float:left'>
		<img src='qimg/img/cos102.png'/>
		</div>";
		echo "<div style='float:left'>
		<img src='qimg/img/cos103.jpg'/>
		</div>
";
	}
?>