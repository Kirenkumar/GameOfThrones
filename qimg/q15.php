<?php
	session_start();
	if($_SESSION['level']>=15){
		echo "<div style='height:100%'>
		<div name='blank' style='height:270px; width:0%;float:left'/>
		<div>
		<img src='qimg/img/cos151.PNG'/>
		</div>
		<div name='blank' style='height:270px; width:0%;float:left'/>";

		echo "<div >
		<img src='qimg/img/cos152.PNG'/>
		</div>
		<div name='blank' style='height:270px; width:0%;float:left'/>";

		echo "<div >
		<img src='qimg/img/cos153.PNG'/>
		</div>";

		echo "<div >
		<img src='qimg/img/cos154.jpg'/>
		</div>

		</div>";
	}
?>