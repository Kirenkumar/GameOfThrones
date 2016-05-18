<?php
	session_start();
	if($_SESSION['level']>=14){
		echo "<div style='height:100%'>
		<div style='float:left'>
		<img src='qimg/img/cos141.jpg'/>
		</div>";

		echo "<div style='float:left'>
		<img src='qimg/img/cos142.jpg'/>
		</div>";

		echo "<div style='float:left'>
		<img src='qimg/img/cos143.jpg'/>
		</div>
		</div>";
	}
?>