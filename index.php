<!--<?php
session_start();
?>-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Game of Thrones</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- <link rel="stylesheet" type="text/css" href="transitions.css">  -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet"> 
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    
    <style type="text/css">
    body{
    	color: khaki;
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
    .tab-content{
    	    position: absolute;
 		   left: 171px;
   		   top: 110px;
}
    }
    .thumbnail{
      width:65px;
    }
    #comments
{
  overflow-y: scroll;
}

#comments::-webkit-scrollbar-track
{
  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
  background-color: #F5F5F5;
}

#comments::-webkit-scrollbar
{
  width: 10px;
  background-color: #F5F5F5;
}

#comments::-webkit-scrollbar-thumb
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
</head>
<body>
<div id="wrapper" class="active">  
  <div id="sidebar-wrapper">
    <ul id="sidebar_menu" class="sidebar-nav">
     <li class="sidebar-brand"><a id="menu-toggle" href="#">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
    </ul>
    <ul class="sidebar-nav nav-pills" id="sidebar">
      <li id="showGame"class="active"><a href="<?php if(isset($_SESSION['email'])){ echo '#game';} else{ echo '#welcome1';} ?>" data-toggle="tab">question<span class="sub_icon glyphicon glyphicon-pencil"></span></a></li>
      <li id="showRules"><a href="<?php if(isset($_SESSION['email'])){ echo '#rules2';} else{ echo '#rulesNL';} ?>" data-toggle="tab">rules<span class="sub_icon glyphicon glyphicon-exclamation-sign"></span></a></li>
      <li id="showleader"><a data-toggle="pill" href="#scores">scores<span class="sub_icon glyphicon glyphicon-tower"></span></a></li>
      <li id="showForum"><a data-toggle="pill" href="#comments">comments<span class="sub_icon glyphicon glyphicon-comment"></span></a></li>
      <li><a>logout<span class="sub_icon glyphicon glyphicon-off"></span></a></li>
    </ul>
    <!--
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
      -->
        
  </div>
  <div class="col-lg-12 col-md-12 head">
            <h1>Game of Thrones</h1>
  </div>

  <div class="tab-content">
    <div id="ques" class="tab-pane fade in active">
    <div class="mybox" align="center">
    <div class="bg"></div>
    <div class="question-section">
    
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="black.png" alt="black.png">
    </div>

    <div class="item">
      <img src="black.png" alt="black.png">
    </div>

    <div class="item">
      <img src="black.png" alt="black.png">
    </div>

    <div class="item">
      <img src="black.png" alt="black.png">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<div class="answer-section">
                <form class="ans-in">
                  <input type="text" class="form-control">
                  <input type="sumbit" value="Submit" class="btn btn-primary">
                </form>

              </div>
    
    </div>
    </div>
    <div id="rules2" class="tab-pane fade">
    <div class="mybox">
    <div class="bg"></div>
  
      <h3>Rules</h3> 
                <?php if(isset($_SESSION['email'])) { include 'rules.html'; } ?>
      </div>   
    </div>
    </div>
    
    <div id="showleader" class="tab-pane fade">
    <div class="mybox">
    <div class="bg"></div>
        <div class="col-md-3" >
        <img src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="img-circle">
        </div>
        
        <div class="col-md-9">
            <h3>User Name</h3>
            <h6>Email: MyEmail@servidor.com</h6>
            <h6>Ubication: Colombia</h6>
            <h6>Old: 1 Year</h6>
        </div>

<table class="table table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
  </div>


</div>
    <div id="comments" class="tab-pane fade">
    <div class="mybox">
    <div class="bg"></div>
<div class="col-md-12">
<h3>Comment</h3>
</div>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus in iaculis felis. Nam tincidunt dignissim lectus at ultrices. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis cursus lacinia lorem, eget interdum neque. Maecenas commodo feugiat placerat. Fusce finibus ligula enim, id ultricies libero vulputate at. Mauris vel mi cursus nisl consequat viverra. Donec eleifend dolor sed felis blandit malesuada. Ut risus nulla, commodo non interdum vel, luctus eget sapien. Nulla porta, diam eu vestibulum scelerisque, nibh sapien porttitor est, eu vulputate ipsum velit et enim. Fusce tristique ligula tortor, ac blandit purus posuere eget. Quisque bibendum, purus vel rhoncus pulvinar, quam odio porttitor lacus, quis porta elit ante ac nunc. In a nulla in lorem hendrerit elementum vel non libero. Donec ut nisi vel neque cursus blandit. Vivamus faucibus odio orci, at blandit ante finibus malesuada. Fusce id tincidunt mauris.

Integer nec lorem pulvinar, tempor mi non, placerat mi. Etiam maximus augue sed enim sagittis tristique. Integer imperdiet augue fermentum mi blandit, sit amet condimentum arcu imperdiet. Integer cursus dui quis ex pulvinar pretium. Quisque eget odio in est fringilla commodo vel ac ipsum. In congue ex non nunc tristique, id pretium sapien faucibus. Etiam et tempor odio. Pellentesque aliquam orci eros, non ullamcorper odio tincidunt porta. Duis vel massa porta, molestie neque eu, aliquet sem. Sed ut turpis odio. Nam in tellus ut augue sollicitudin cursus a commodo sem. Donec elementum lacus sed augue vehicula ultricies. Cras egestas nisi et vehicula ornare. Ut egestas ultricies dolor at semper. Aliquam nec tortor dapibus neque efficitur vestibulum. Sed elementum scelerisque ligula, id faucibus urna.

Nunc tincidunt, ante id bibendum porta, elit quam semper neque, fringilla imperdiet tortor sapien ut neque. Quisque varius magna ut neque volutpat finibus. Nulla eu tellus eget purus aliquet ultrices. Quisque tincidunt vitae augue vitae posuere. Curabitur maximus viverra massa, ac posuere mauris rhoncus ut. Nam imperdiet nulla justo, in placerat mauris aliquet eget. Aenean fermentum finibus sem, a dapibus mauris porta vel. Maecenas facilisis leo facilisis sapien cursus, id ultricies justo laoreet. Ut mi quam, imperdiet non dolor at, sagittis sodales quam. Maecenas tincidunt nisi nisi, ac lacinia metus porta eget. Fusce vel lorem congue, venenatis tellus at, dignissim tellus. Aenean ornare id diam sit amet ornare. Nunc ultricies dui ac lacus dictum auctor. Nulla sed ullamcorper augue. Aenean condimentum tellus non ante auctor fermentum.

Aenean quis est faucibus, fringilla orci a, imperdiet sapien. In sollicitudin magna quam. Ut efficitur porttitor fringilla. Aenean non rutrum justo, et eleifend magna. Morbi sagittis consequat ipsum, ac accumsan risus dictum vitae. Duis blandit gravida enim. Ut purus magna, consequat et pulvinar finibus, fringilla sed lectus. Phasellus ultrices ipsum at mi pretium convallis. Cras id felis a odio ornare iaculis. In quis porta dolor.

Aliquam et vehicula turpis. Integer placerat ornare volutpat. Phasellus viverra viverra enim, et commodo libero feugiat ut. Pellentesque consectetur viverra erat, et mollis arcu eleifend aliquet. Vivamus at accumsan velit, non lobortis sapien. Duis viverra orci dui, ut vulputate sem blandit nec. Nunc congue imperdiet nisl, eu lacinia mi egestas quis. Etiam finibus pharetra elementum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam auctor suscipit quam non aliquet. Donec pretium ante a nibh consequat, sit amet auctor tortor feugiat. Nunc mattis nunc quam, sed aliquet libero lacinia et. Quisque faucibus maximus pellentesque. Aliquam tristique enim sem, ut sagittis leo auctor a. Duis rutrum convallis sapien quis aliquet.</p>

    </div>
    </div>
  </div>
           
    
</div>

<script type="text/javascript">
$("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
});
</script>
<!-- <script type="text/javascript" src="collage.js"></script>
 --></body>
</html>