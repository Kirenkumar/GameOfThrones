<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns:fb="http://ogp.me/ns/fb#">
<head>

    <style type="text/css">
        body {
            background:url('_include/img/bg3.jpg') no-repeat center center fixed;
            }
        .listspa>li{margin-bottom: 10px;
        font-size:17px;}
    </style>
    <title>Game of Thrones | ITRIX'16</title>
    <link rel="shortcut icon" href="c1.ico">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/icons.css" />
    <link rel="stylesheet" type="text/css" href="css/style5.css" />



    <!-- Bootstrap -->
<link href="_include/css/bootstrap.min.css" rel="stylesheet">

<!-- Main Style -->
<link href="_include/css/main2.css" rel="stylesheet">

<!-- Supersized -->
<link href="_include/css/supersized.css" rel="stylesheet">
<link href="_include/css/supersized.shutter.css" rel="stylesheet">

<!-- FancyBox -->
<link href="_include/css/fancybox/jquery.fancybox.css" rel="stylesheet">

<!-- Font Icons -->
<link href="_include/css/fonts.css" rel="stylesheet">

<!-- Shortcodes -->
<link href="_include/css/shortcodes.css" rel="stylesheet">

<!-- Responsive -->
<link href="_include/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="_include/css/responsive.css" rel="stylesheet">

<!-- Modernizr -->
<script src="_include/js/modernizr.js"></script>

<!-- Google Font -->
<link href="_include/css/fonts/Google Font.css" rel="stylesheet" type="text/css">


</head>


<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=706718599447644&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

      <!-- HEADER -->
      <div class="container1">
          <header  class="chamber-header">
                <h2>Game of Thrones </h2>
          </header>
      </div>

      <div id="notification">
      <span class="bonus" id="bonusgo"></span>
      <span class="dismiss"><a title="dismiss this notification">X</a></span>
       </div>



      <div class="container" style="margin-left:2%; width:100% height:50%">
      <!--STATS أَذَان -->

      
      <div class="span2">
          <div id="Stats" style="display: none;">
              <h3><center>Stats</center></h3>
                  <div id="DealsNumber" style="position: relative; height: 100%;">
                    <ul style="position: relative; margin: 0px;  padding: 0px; list-style:none;">
                    <li class="dealsNo">&nbsp; Points <span class="myNumber" id="points"> </span></li>
                    <li class="dealsNo">&nbsp; Level <span class="myNumber" id="level"></span></li>
                    <li class="dealsNo">&nbsp; Ranking <span class="myNumber" id="ranking"></span></li>
                    <li class="dealsNo">&nbsp; No. of Players<br> &nbsp;&nbsp;in this level<span class="myNumber" id="levelUsers"></span></li>
                      <li class="dealsNo">&nbsp; Total Players<span class="myNumber" id="totalPlayers"></span></li>

                    </ul>
                  </div>
          </div>
      </div>

      <!--MENU قبلة -->


      <div class="container1">
      <nav id="bt-menu" class="bt-menu">

        <a href="#" class="bt-menu-trigger"><span>Menu</span></a>
        <ul class="">
          <li  id="showWelcome"><a href="<?php if(isset($_SESSION['email'])){ echo '#welcomeL';} else{ echo '#welcome1';} ?>" data-toggle="tab">Home</a></li>
          <li  id="showGame" ><a href="<?php if(isset($_SESSION['email'])){ echo '#game';} else{ echo '#welcome1';} ?>" data-toggle="tab">Game</a></li>
          <li  id="showRules" ><a href="<?php if(isset($_SESSION['email'])){ echo '#rules2';} else{ echo '#rulesNL';} ?>" data-toggle="tab">Rules</a></li>
          <li id="showFAQ" ><a href="<?php if(isset($_SESSION['email'])){ echo '#faq';} else{ echo '#faqNL';} ?>" data-toggle="tab">FAQ</a></li>
          <li id="showForum" ><a href="<?php if(isset($_SESSION['email'])){ echo '#forum1';} else{ echo '#forumNL';} ?>" data-toggle="tab">Forum</a></li>
          <li id="showContact"><a href="<?php if(isset($_SESSION['email'])){ echo '#contactL';} else{ echo '#contactNL';} ?>" data-toggle="tab">Contact</a></li>
          <li  id="showleader" ><a href="<?php if(isset($_SESSION['email'])){ echo '#leader';} else{ echo '#leaderN';} ?>" data-toggle="tab">LeaderBoard</a></li>
          <li><a id="blank" style="height:60%;"></a></li>

          <li class=""><a id="logreg" href="#loginreg">Login/Register</a></li>
          <li><a id="logout" style="display: none;">LogOut</a></li>

        </ul>
      </nav>
      </div>

      <!-- TAB CONTENT -->

      <div id="game2" class="tabbable span8" style="margin:20px;margin-top:-3%;width:70%;display:block;background-color: black; opacity: 0.8;">
      
          <div class="tab-content" style="width:95%;">
              <div class="tab-pane fade active in" id="game">
              <div  id="titlediv">
              <div><h3><center>
              </center></h3>
              </div>
              </div>
              <div  id='game3'>

              </div>
              <div id ="answerdiv" >
              <input type ="text" id="answer" style="position:relative; margin-left:15px;margin-top:3%; width:76%; height:30px; background-color:rgba(0,0,0,0.2);color:#DE5E60;outline-color:#ccc;border-color:#ccc;border-shadow-color:#99f;weight:bolder;font-size:18px;"/>
              <input type ="Submit" class="answersmt" style="width:15%; "id="submitbtn" value="Submit"></input><!--style="position:relative;border-radius:5px;font-weight:bold; margin-left:16px;margin-top:-14px;height:31px; width:225px; background-color:rgba(0,0,0,0.2);color:#DE5E60;outline-color:#ccc;border-color:#ccc;border-shadow-color:#99f;weight:bolder;font-size:18px;"-->
              </div>
                <!-- Edits-->
                <div id="skipdiv">
                <input type="submit"  class="answersmt" style="width:15%;margin-left:40%" id="skipbtn" value="Skip"></input>
                </div>
                <!-- over -->
              </div>
           

              <div class="tab-pane fade" id="forum1" style="overflow: auto;width:100%;resize:none;height:60%;margin-left:2%;">
                <?php if(isset($_SESSION['email'])) { include 'comments.html'; } ?>
              </div>

              <div class="tab-pane fade" id="rules2">
                <?php if(isset($_SESSION['email'])) { include 'rules.html'; } ?>
              </div>

              <div id="faq" class="tab-pane fade">
                <?php if(isset($_SESSION['email'])) { include 'faq.html'; } ?>
              </div>  

              <div id="leader" class="tab-pane fade">
                <?php if(isset($_SESSION['email'])) { include 'leadertab.php'; } ?>
              </div>  

              <div class="tab-pane fade" id="welcomeL">
                <?php if(isset($_SESSION['email'])) { include 'welcomeL.html'; } ?>
              </div>

              <div class="tab-pane fade" id="contactL">
                <?php if(isset($_SESSION['email'])) { include 'contact.html'; } ?>
              </div>

          </div>

      </div>

      <!-- TAB CONTENT 2 -->

      <div id="welcome" class="tabbable span8" style="margin:20px;margin-top:-1%;width:70%;height:60%;display:none;bottom:35px;background-color:black;opacity:0.8;">


        <div class="tab-content" style="width:100%;height:100%">
            <div class="tab-pane fade active in" id="welcome1">
              <?php if(!isset($_SESSION['email'])) { include 'welcome.html'; } ?>
            </div>
            <div id="rulesNL" class="tab-pane fade">
               <?php if(!isset($_SESSION['email'])) { include 'rules.html'; } ?>
            </div>
            <div id="faqNL" class="tab-pane fade">
               <?php if(!isset($_SESSION['email'])) { include 'faq.html'; } ?>
            </div>
            <div id="forumNL" class="tab-pane fade">
	             <span>Please login to view the Forum</span>
            </div>
            <div id="leaderN" class="tab-pane fade">
                <span>Please login to view the LeaderBoard</span>
              </div>  
            <div class="tab-pane fade" id="contactNL">
                <?php if(!isset($_SESSION['email'])) { include 'contact.html'; } ?>
            </div>

        </div>
      </div>

    
      <!--LEADERBOARD الصحابة‎ 


      <div class="span2" id="Leaderboard"  style="position:absolute; display: none; margin-left:72%">
        <h3><center>Leaderboard</center></h3>
          <div id="Leaders" style="position: relative;">

          </div>
      </div>
  </div>
-->
      
<!-- Js -->
<script src="jq.min.js"></script> <!-- jQuery Core -->
<script src="jq-ui.js"></script>
<script src="_include/js/bootstrap.min.js"></script> <!-- Bootstrap -->
<script src="_include/js/supersized.3.2.7.min.js"></script> <!-- Slider -->
<script src="_include/js/waypoints.js"></script> <!-- WayPoints -->
<script src="_include/js/waypoints-sticky.js"></script> <!-- Waypoints for Header -->
<script src="_include/js/jquery.isotope.js"></script> <!-- Isotope Filter -->
<script src="_include/js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
<script src="_include/js/jquery.fancybox-media.js"></script> <!-- Fancybox for Media -->
<script src="_include/js/jquery.tweet.js"></script> <!-- Tweet -->

<script src="_include/js/main.js"></script> <!-- Default JS -->
<script src="carousel/jquery.nivo.slider.pack.js" type="text/javascript"></script>
<script src="custom.js"></script> <!-- Login/Register -->
<script src="_include/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
<script src="ticker/jquery.simple-text-rotator.js"></script> <!-- Text Rotator -->
<script src="Leader.js"></script><!--Leaderboard-->
<!--<script type="text/javascript" src="ticker/jquery.tickertype.js"></script><-->
<!--<script src="ticker/jquery.vticker.min.js"></script>--> <!-- Updates -->
<!-- End Js -->
<?php include 'loginreg.php';?>
</body>
<script src="js/classie.js"></script>
<script src="js/borderMenu.js"></script>
</html>
