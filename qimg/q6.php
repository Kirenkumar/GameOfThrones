<?php
	session_start();
	if($_SESSION['level']>=6){
		echo "<div style='height:100%'>
		<div style='float:left'>
		<img src='qimg/img/cos61.jpg'/>
		</div>";
		echo "<div style='float:left'>
		<img src='qimg/img/cos62.jpg'/>
		</div>
";
		echo "<div style='float:left'>
		<img src='qimg/img/cos63.jpg'/>
		</div>
		</div>";
	}
?>