
$("#logreg").fancybox({
    'titleShow'     : false,
    'transitionIn'  : 'elastic',
    'transitionOut' : 'elastic',
    'easingIn'      : 'easeOutBack',
    'easingOut'     : 'easeInBack' 
});

$(document).ready(function($)
{
    var flag=1;
    $("#skipbtn").hide();
    $("#notification").hide();
    $("#logout").hide();
    $("#supersized").hide();
    $('.sticky-nav').hide();
    $('#sponsors1').hide();
    $('#mainlogo').hide();
    $('#updates').hide();
    $('#loading').hide();
    $('#ticker-area').hide();
    $('#this-carousel-id').carousel({
      interval: 2500
    });
    $('#slider').nivoSlider({
    effect: 'random',               // Specify sets like: 'fold,fade,sliceDown'
    slices: 15,                     // For slice animations
    boxCols: 8,                     // For box animations
    boxRows: 4,                     // For box animations
    animSpeed: 2000,                 // Slide transition speed
    pauseTime: 3000,                // How long each slide will show
    startSlide: 0,                  // Set starting Slide (0 index)
    directionNav: false,             // Next & Prev navigation
    controlNav: false,               // 1,2,3... navigation
    controlNavThumbs: false,        // Use thumbnails for Control Nav
    pauseOnHover: true,             // Stop animation while hovering
    manualAdvance: false,           // Force manual transitions
    prevText: 'Prev',               // Prev directionNav text
    nextText: 'Next',               // Next directionNav text
    randomStart: false,             // Start on a random slide
    beforeChange: function(){},     // Triggers before a slide transition
    afterChange: function(){},      // Triggers after a slide transition
    slideshowEnd: function(){},     // Triggers after all slides have been shown
    lastSlide: function(){},        // Triggers when last slide is shown
    afterLoad: function(){}         // Triggers when slider has loaded
    });
    
    
    $.post("checksession.php",{},function(reply)
    {
        if(reply.codex==20)
        {
            
            $("#logreg").hide();
                $("#Stats").show();
                $("#game2").show();
                $("#Leaderboard").show();
                 $('#crownUser').text("Welcome, "+reply.namex);
                  $("#logout").show();
                  $("#welcome").hide();
        }
        if(reply.codex==10)
            {
       

                $("#logreg").show();
                $("#Stats").hide();
                $("#game2").hide();
                $("#Leaderboard").hide();
                $("#welcome").show();

            }
    },'json');



$('#answer').keypress(function(e){
if(e.which == 13) {
//call your code
$("#submitbtn").trigger("click");

 }
});

$('#iid').keypress(function(e){
if(e.which == 13) {
//call your code
$("#loginbtn").trigger("click");

 }
});

$(document).keydown(function(e){
if(e.keyCode == 27) {
//call your code
$(".fancybox-overlay").fadeOut();


 }
});
    
    $(".rotate").textrotator({
      animation: "spin", // Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
      separator: ",", // If you don't want commas to be the separator, you can define a new separator (|, &, * etc.) by yourself using this field.
      speed: 2000 // How many milliseconds until the next word show.
    });
    
    $('#submitbtn').click(function(e)
    {
        e.preventDefault();
        var answer=$('#answer').val().trim();
           if(localStorage['skipbtn']=='on')
           var url="bonuscheck.php" ; 
           else
           var url="checkanswer.php" ;
           $.post(url,{answer:answer},function (datax)
        {
                
            //window.alert(datax);    
              
            if(datax.codex=="10")
            {
                $.fancybox({
                    
                    content :"<div style='width:300px;height:220px'><center><img src='_include/img/right.jpg'/></center></div>"
                    
                });
                if(localStorage['skipbtn']=='on')
                {
                 localStorage['skipbtn']=='off';
                  $("#skipbtn").hide();
                }
                loadData();
                loadData2();

            }
            else if(datax.codex=="20")
            {
                $.fancybox({
                    content:"<div style='width:300px;height:226px'><center><img src='_include/img/wrong.png' height='100%'/></center></div>"
                });
            }
           $('#answer').val('');
        },"json");
        
    });
    
    $('#logreg').click(function(e)
    {
        $("#error0").hide();
        $("#error1").hide();
        $("#error2").hide();
        $("#error3").hide();
        $("input#email,input#pass,input#regemail,input#regpass,input#name,input#phone").val("");
    });
    $('#logout').click(function(e)
    {
        $cont="<br><h2>Logged Out!</h2>";
        var flag=2;
        $.post("logout.php",{flag:flag},function(data)
        {
            if(data==1)
            {
                //fblogout();
            }
            $.fancybox({
                    content: $cont
            });
            $("#logreg").show();
            $("#logout").hide();
            $("#Stats").hide();
            $("#game2").hide();
            $("#Leaderboard").hide();
            $("#welcome").show();
            $('#crownUser').text("");
           window.location.replace("index.html");
        });
        
    });
    $('#showForum').click(function(e)
    {
        loadData3();
        $('#fbc').load('CommentLoader.php',function(){
        try{
        FB.XFBML.parse(); 
        }
        catch(ex){}
       });
    
        
    });
    
    $('#registerbtn').click(function(e)
    {
        window.open('http://www.itrix.in/signup.php','_blank');
    });
$("#skipbtn").click(function(e) {
  e.preventDefault();
        var url = 'bonusreload.php';
        $.post(url,function (jsondata){
                  $('#skipbtn').hide();
                  localStorage['skipbtn']='off';
                  $("#logreg").hide();
                  $('#logout').show();
                  $("#Stats").show();
                  $("#game2").show();
                  $("#welcome").hide();
                  $("#Leaderboard").show();
                  $('#crownUser').text("Welcome, "+name);
                  loadData();
                  loadData2();
                  location.reload();
            });
    });
    $('.left').click(function(e)
    {
        $('.left li').removeClass('current');
    });
    loadData();
    loadData2();

});


$(".dismiss").click(function(){
      localStorage['notification']='0';
       $("#notification").fadeOut("slow");
});
    
$("#loginbtn").click(function(e) {
        e.preventDefault();
        var email=$('#email').val().trim();
        var iid=$('#iid').val().trim();
        var url = 'checklogin.php';
        
       $.post(url,{email:email,iid:iid},function (jsondata){
            
            var code = jsondata.code;
            
            if (code == 1){
              window.alert("Get ready for the adventure");
              window.location.href="i.php";
              window.alert("Welcome "+email);
              

                var name = jsondata.name;
                $cont="<br><h2>Welcome "+name+"!</h2>";
                parent.$.fancybox.close();
                $.fancybox({
                    content: $cont
                });
                
                  $("#logreg").hide();
                  $('#logout').show();
                  $("#Stats").show();
                  $("#game2").show();
                  $("#welcome").hide();
                  $("#Leaderboard").show();
                  $('#crownUser').text("Welcome, "+name);
                  loadData();
                  loadData2();
                  //$("#notification").fadeIn("fast").append('your message'); 
                  //window.alert('hi'+jsondata.codenoti);
                localStorage['notification']='0';
                if(jsondata.codenoti == 10)
                {
                $("#notification").fadeIn("slow");
                $("#bonusgo").empty().append('Bonus Question');
                localStorage['notification']='10';
                }
                 location.reload();
            }

            
           else if(code == 50){
           
              
              //window.alert(code);
              window.location.replace("index.html");
              window.alert("You Have Been Blocked Please Contact Admin");
             
            }
            
            else if(code == 2){
              //window.alert(code);
              window.location.replace("index.html");
              window.alert("Wrong ITrixID/Username");
              //fancy not working
            }
            else if(code == 3){
              //window.alert(code);
              window.location.replace("index.html");
              window.alert("Please register at ITrix.in");
              //fancy not working
            }
  },"json");
    });

$("#bonusgo").click(function(){
  
            $.post('bonusq.php',function(jsondata){
            var code = jsondata.codex;
            //window.alert('hi');
            if (code == 10){
              //window.alert(code);
                  $("#skipbtn").show();
                  localStorage['skipbtn']='on';
                  loadData();
                  loadData2();
                  location.reload();
            }
            if (code == 20)
            {
            $("#notification").fadeIn("fast");
            $("#bonusgo").empty().append('Bonus Question has already attended');
            }
},"json");  
});



$(document).ready(function(){
if(localStorage['notification']=='10'){
  $("#notification").fadeIn("slow");
  $("#bonusgo").show().empty().append('Bonus Question')
}
if(localStorage['skipbtn']=='on'){
  $("#skipbtn").show();
}

if(localStorage['skipbtn']=='off'){
  $("#skipbtn").hide();
}
});
$("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
});