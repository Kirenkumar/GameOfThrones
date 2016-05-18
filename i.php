<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Game of Thrones</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- <link rel="stylesheet" type="text/css" href="transitions.css">  -->

    <link rel="shortcut icon" href="c1.ico">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/icons.css" />
    <link rel="stylesheet" type="text/css" href="css/style5.css" />
  
    
    <style type="text/css">
    body{
      color: gold !important;
      position: absolute;
      height: 100% !important;
      width: 100%;
      cursor: url('Icons8-Windows-8-Military-Sword.ico'), default!important;
      /*cursor: url('images/300sword.ico'), default!important;*/

    }
    .head{
    height: 75px;
    background-color: black;
    opacity: 0.5;
    margin-bottom: 100px;
    color: white;
    text-align: center;
    vertical-align: middle;
    
  }
  .tab-content{
              position: absolute;
    left: 13%;
    top: 12%;
    padding: 20px;
}
    
    .mybox {
           width: 1040px;
    height: 510px;
    opacity: 1.0;
    z-index: 5;
    font-size: 200%;
    }

    .mybox .bg{
      position: absolute;
      z-index: -1;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      background-image: url(black.png);
      opacity: 0.5;
      width: 100%;
      height: 100%;
      border-radius: 20px;
    }
    
    .thumbnail{
      width:65px;
    }
    #comments
{
  overflow-y: auto;
}

#comments::-webkit-autobar-track
{
  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
  background-color: #F5F5F5;
}

#comments::-webkit-autobar
{
  width: 10px;
  background-color: #F5F5F5;
}

#comments::-webkit-autobar-thumb
{
  background-color: #F90; 
  background-image: -webkit-linear-gradient(45deg,
                                            rgba(255, 255, 255, .2) 25%,
                        transparent 25%,
                        transparent 50%,
                        rgba(255, 255, 255, .2) 50%,
                        rgba(255, 255, 255, .2) 75%,
                        transparent 75%,
                        transparent)
}
.question-section{
  width: 100%;
  height: 80%;
}
/*.Collage img{
    opacity:1;
    box-shadow:0px 3px 4px #dcdcdc;
    border-radius: 3px;
     
    * Change this to try different borders
    
    border:3px solid #FFF;
}
 .Collage{
    /* 
     * Change this to set the spacing of the images in the grid
     
    padding:5px;
  }
  */
  #myCarousel{
        width: 90%;
    height: 70%;
    top: 50px; 
  }
  .carousel-inner{
        height: 100%;
    width: 100%;
  }
  .carousel-inner>.item{
        width: 100%;
    height: 100%;
  }
  .carousel-inner>.item>img, .carousel-inner>.item>a>img{
    height: 100%;
  }
  .answer-section{
    position: relative;
    margin-left: 3%;
    margin-right: 3%;
    margin-bottom: 5%;
    padding: 10px;
    
  }


  .ans-in{
    vertical-align: middle;
    color: black;
  }
    </style>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- <link rel="stylesheet" type="text/css" href="transitions.css">  -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet"> 
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>


<!-- FancyBox -->
<link href="_include/css/fancybox/jquery.fancybox.css" rel="stylesheet">

<!-- Font Icons -->

<!-- Shortcodes -->

<!-- Responsive -->
<link href="_include/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="_include/css/responsive.css" rel="stylesheet">

<!-- Modernizr -->
<script src="_include/js/modernizr.js"></script>
<audio autoplay loop>
      <source src="back.ogg">
      <source src="back.mp3">
  </audio
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



      <div id="notification">
      <span class="bonus" id="bonusgo"></span>
      <span class="dismiss"><a title="dismiss this notification">X</a></span>
       </div>

<div id="wrapper" class="active">  
  <div id="sidebar-wrapper">
        <ul id="sidebar_menu" class="sidebar-nav">
           <li class="sidebar-brand"><a id="menu-toggle" style="height:75px;" href="#">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
        </ul>
        <ul class="sidebar-nav nav-pills" id="sidebar">
          <li  id="showGame" class="active"><a data-toggle="pill" href="<?php if(isset($_SESSION['email'])){ echo '#game';} else{ echo '#gameNL';} ?>" data-toggle="tab">Game <span class="sub_icon glyphicon glyphicon-pencil"></span></a></li>
          <li  id="showRules" ><a data-toggle="pill" href="#rules2" data-toggle="tab">Rules<span class="sub_icon glyphicon glyphicon-exclamation-sign"></span></a></li>
          <li id="showFAQ" ><a data-toggle="pill" href="#faq" data-toggle="tab">FAQ<span class="sub_icon glyphicon glyphicon-question-sign"></span></a></li>
          <li id="showForum" ><a data-toggle="pill" href="<?php if(isset($_SESSION['email'])){ echo '#forum1';} else{ echo '#forumNL';} ?>" data-toggle="tab">Forum<span class="sub_icon glyphicon glyphicon-comment"></span></a></li>
          <li id="showContact"><a data-toggle="pill" href="<?php if(isset($_SESSION['email'])){ echo '#contactL';} else{ echo '#contactNL';} ?>" data-toggle="tab">Contact<span class="sub_icon glyphicon glyphicon-earphone"></span></a></li>
          <li  id="showleader" ><a data-toggle="pill" href="<?php if(isset($_SESSION['email'])){ echo '#leader';} else{ echo '#leaderN';} ?>" data-toggle="tab">LeaderBoard<span class="sub_icon glyphicon glyphicon-circle-arrow-up"></span></a></li>
          <li  id="showstats" ><a data-toggle="pill" href="<?php if(isset($_SESSION['email'])){ echo '#stats';} else{ echo '#statsN';} ?>" data-toggle="tab">Stats<span class="sub_icon glyphicon glyphicon-user"></span></a></li>

          <li><a id="blank" style="height:60%;"></a></li>

         <!-- <li class=""><a id="logreg" href="#loginreg">Login/Register</a></li>-->
          <li><a id="logout" style="display: none;">LogOut<span class="sub_icon glyphicon glyphicon-off"></span></a></li>

        </ul>
        <!--<img class="img-responsive" src="game_of__thrones___the_iron_throne_png_by_wishfulrose-d7wlw11.png" alt="win">-->
        </div>
  <div class="col-lg-12 col-md-12 head">
            <h1>Game of Thrones</h1>
  </div>


  <div class="tab-content">
    <div id="game" class="tab-pane fade <?php if(isset($_SESSION['email'])) { echo "in active";}?>">
      <div class="mybox" align="center">
      <div class="bg"></div>
      <div class="question-section">
        <div  id="titlediv">
          <div>
            <h3><center></center></h3>
          </div>
        </div>
        <div  id='game3'>
        </div>
      </div>
      <div class="answer-section">
        <form class="ans-in">
          <input type="text" class="form-control" id="answer">
          <input type="submit" value="Submit" class="btn btn-primary" id="submitbtn">
        </form>
        <div id="skipdiv">
          <input type="submit"  class="btn btn-primary" style="width:15%;margin-left:0" id="skipbtn" value="Skip"/>
        </div>
      </div>
    </div>
	</div>
  <!--gameNL-->
  <div id="gameNL" class="tab-pane fade <?php if(!isset($_SESSION['email'])) { echo "in active";}?>">
    <div class="mybox">
    <div class="bg"></div>
  
      <h3></h3> 
                <?php  { include 'welcome.html'; } ?>
      </div>   
    </div>
    
  <!--rulesNL-->
    <div id="rulesNL" class="tab-pane fade">
    <div class="mybox">
    <div class="bg"></div>
  
      <h3>Rules</h3> 
                <?php  { include 'rules.html'; } ?>
      </div>   
    </div>
    <!--rules 2-->
    <div id="rules2" class="tab-pane fade" style="
    overflow: auto;
    overflow-x: hidden;">
    <div class="mybox">
    <div class="bg"></div>
  
      <h3>Rules</h3> 
                <?php  { include 'rules.html'; } ?>
      </div>   
    </div>
    <!--stats-->
    <div id="stats" class="tab-pane fade">
    <div class="mybox">
    <div class="bg"></div>
  
      <h3>Stats</h3> 
                <?php  { include 'stats.php'; } ?>
      </div>   
    </div>
    <!--statsN-->
    <div id="statsN" class="tab-pane fade">
    <div class="mybox">
    <div class="bg"></div>
  
      <h3>Stats</h3> 
                <span>Please login to view your stats</span>
      </div>   
    </div>
    <!--comm-->
    <div id="forum1" class="tab-pane fade" style="
    overflow: auto;
    overflow-x: hidden;
">
    <div class="mybox">
    <div class="bg"></div>
  
      <h3>Forum</h3> 
                <?php  if(isset($_SESSION['email'])) { include 'comments.html'; } ?>
      </div>   
    </div>
    <!--forumNL-->
    <div id="forumNL" class="tab-pane fade">
    <div class="mybox">
    <div class="bg"></div>
  
      <h3>Forum</h3> 
               <span>Please login to view the Forum</span>
      </div>   
    </div>
    <!--Faq-->
    <div id="faq" class="tab-pane fade"
    style="
    overflow: auto;
    overflow-x: hidden;
">
    <div class="mybox">
    <div class="bg"></div>
  
      <h3>Forum</h3> 
               <?php { include 'faq.html'; } ?>
      </div>   
    </div>
    <!--Faq-->
    <div id="faqNL" class="tab-pane fade">
    <div class="mybox">
    <div class="bg"></div>
  
      <h3>Faq</h3> 
               <?php { include 'faq.html'; } ?>
      </div>   
    </div>
    <!--contact-->
    <div id="contactL" class="tab-pane fade">
    <div class="mybox">
    <div class="bg"></div>
  
      <h3>Contact</h3> 
               <?php { include 'contact.html'; } ?>
      </div>   
    </div>
    <!--contact-->
    <div id="contactNL" class="tab-pane fade">
    <div class="mybox">
    <div class="bg"></div>
  
      <h3>Contact</h3> 
               <?php { include 'contact.html'; } ?>
      </div>   
    </div>
    <!--Leader-->
    <div id="leader" class="tab-pane fade" style="
    overflow: auto;
    overflow-x: hidden;
">
    <div class="mybox">
    <div class="bg"></div> 
               <?php if(isset($_SESSION['email'])) { include 'Leadertab.php'; } ?>
      </div>   
    </div>
    <!--<?php if(level==10) echo "kiren" ?>-->
    <!--LeaderNL-->
    <div id="leaderN" class="tab-pane fade">
    <div class="mybox">
    <div class="bg"></div>
  
      <h3>Leaderboard</h3> 
              <span>Please login to view the leaderboard</span>
      </div>   
    </div>
    <!--Welcome1-->
    <div id="welcome1" class="tab-pane fade <?php if(!isset($_SESSION["email"])) echo "active"; ?>">
    <div class="mybox">
    <div class="bg"></div>
  
      <h3></h3> 
                <?php  { include 'welcome.html'; } ?>
      </div>   
    </div>
	</div>
<!-- Js -->
<script src="jq.min.js"></script> <!-- jQuery Core -->
<script src="jq-ui.js"></script>
<script src="_include/js/bootstrap.min.js"></script> <!-- Bootstrap -->
<script src="_include/js/supersized.3.2.7.min.js"></script> 
<script src="_include/js/waypoints.js"></script> <!-- WayPoints -->
<script src="_include/js/waypoints-sticky.js"></script> <!-- Waypoints for Header -->
<script src="_include/js/jquery.isotope.js"></script> <!-- Isotope Filter -->
<script src="_include/js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
<script src="_include/js/jquery.fancybox-media.js"></script> <!-- Fancybox for Media -->
<script src="_include/js/jquery.tweet.js"></script> <!-- Tweet -->

<script src="_include/js/main.js"></script> <!-- Default JS -->
<script src="carousel/jquery.nivo.slider.pack.js" type="text/javascript"></script>
<script src="custom.js"></script> <!-- Login/Register -->
<script src="_include/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery autoTo, jQuery One Page Navi -->
<script src="ticker/jquery.simple-text-rotator.js"></script> <!-- Text Rotator -->
<script src="Leader.js"></script><!--Leaderboard-->
<script type="text/javascript" src="ticker/jquery.tickertype.js"></script>
<script src="ticker/jquery.vticker.min.js"></script>
<!-- End Js -->
<?php include 'loginreg.php';?>
<script src="js/classie.js"></script>
<script src="js/borderMenu.js"></script>
</body>
</html>


  