<body style='background:black'>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=706718599447644&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php
	session_start();
	$author1='gotensupersaiyan@gmail.com';
	$author2='ptpb1994@gmail.com';
	$author3='avinashcegian95@gmail.com';
	$level=1;
	if($_SESSION['email']==$author1 || $_SESSION['email']==$author2 || $_SESSION['email']==$author3){
		for ($level=1; $level < 24; $level++) { 
			echo "<div style='float:left;margin-left:5%'><div style='color:white'>Level : ".$level." </div>";
			echo '<div class="fb-comments" data-href="http://cos.itrix.in/comment/comment'.$level.'.php" data-numposts="5" data-colorscheme="dark"></div>';
			echo "</div>";
		}
	}
?>

</body>