<?php
	session_start();
	if($_SESSION['level']>=1){
		echo "<div style='height:100%'>
		<div style='float:left'>
		<img src='qimg/img/cos11.png'/>
		</div>";
		echo "<div style='float:left'>
		<img src='qimg/img/cos12.jpg'/>
		</div>
		";
		echo "
		<div style='float:left'>
		<img src='qimg/img/cos13.jpg'/>
		</div>";
		echo "<div style='float:left'>
		<img src='qimg/img/cos14.jpg'/>
		</div>
		</div>";
	}
?>