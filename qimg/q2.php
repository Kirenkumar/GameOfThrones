<?php
	session_start();
	if($_SESSION['level']>=2){
		echo "<div style='height:100%'>
		<div style='float:left'>
		<img src='qimg/img/cos21.gif'/>
		</div>
		";

		echo "<div style='float:left'>
		<img src='qimg/img/cos22.png'/>
		</div>
		";

		echo "<div style='float:left'>
		<img src='qimg/img/cos23.png'/>
		</div>
		</div>";
	}
?>