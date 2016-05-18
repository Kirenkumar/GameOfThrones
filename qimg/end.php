<?php
	session_start();
	if($_SESSION['level']>=8){
		echo "<div style='height:100%'>
		<div style='float:left'>
		<img src='qimg/img/keepCalm.jpg'/>
		</div>
		</div>";
	}
?>

<script>
	$('#answerdiv').hide();
</script>