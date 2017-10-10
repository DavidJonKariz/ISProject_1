<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <style>

</style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet"  href="CSS/homepage.css">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="http://malsup.github.com/jquery.cycle.all.js"></script>
<!--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<style>

</style>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    
    
<body style="background-color: #EEEEEE;">
<div style="fixed: top;">
<nav class="navbar navbar-light" style="background-color: #2196F3">
  <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="#">
            <div class="erclogo"><img src='PICS/Capture.PNG' width='240' height='100' style="margin-top: -18px; margin-left: -19px;
                 height: 76.5px; border-bottom-right-radius: 3%; border-top-right-radius: 5%; border-bottom-left-radius: 5%;">
        </div></a>
    </div>
    <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
      <li><a href="#">Wanna Join?</a></li>
      <li class="navbar navbar-right"><a href="users/Official.php">Club official</a></li>
      <li style="text-align: right;"><a href="users/Adminstrator.php">Administrator</a></li>
    </ul>
      <form class="navbar-form navbar-right" style="margin-top: 20px;">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</nav>
</div>
    
<div style='background-color: white; margin-top: -17px;'>
 
<!--Automatic Slide Show-->       
<!--<div class="w3-content w3-section">-->
  <div id="slideshow">
      <center><div class="slideshow" style="margin-left: -50px;">
                <img src="PICS/Slideshow/1130kenyadrill.jpg" width="1000" height="400" />
		<img src="PICS/Slideshow/dataanalytics.png" width="1000" height="400" />
		<img src="PICS/Slideshow/img_1140.jpg" width="1000" height="400" />
		<img src="PICS/Slideshow/meuylcm6ejybeied_crxzjnckf_zimu_whhquvs2mmy.jpg" width="1000" height="400" />
		<img src="PICS/Slideshow/strathmore-uni.jpg" width="1000" height="400" />
	</div></center>
   
</div>
<!--</div>-->

<script>
/*$("#slideshow > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
}, 3000);*/

$(document).ready(function()
		{
			$('.slideshow').cycle({
			fx: 'scrollLeft' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
			});
		});

</script>
</div>
    <!--the near botom section: Dyk and UE--> 
    <section id="nbs" style="margin-bottom: 100px;">
<!--DID YOU KNOW HTML-->    
<section class = "Dyk" style="">
<div id="Dyk">
        <h2 style="color:black;">Did You Know?</h2>
        <img src="PICS/icons8-Reading-48.png">
</div>
</section>

<!--UPCOMING EVENTS HTML-->    
<section class="UE">
<div id="UE">
        <h2 style="color:black;">Upcoming Events</h2>
        <img src="PICS/icons8-Calendar-48.png">
</div></section>

<!--LIVE FEED HTML-->    
<section class="livefeed">
<div id="livefeed">
        <h2 style="color:black;">Live Feed</h2>
<!--        <img src="PICS/.png" style="margin-left: 100px;">-->
</div></section>
</section>

<!-- the bottom navigation bar-->
</head>
<body>
    <div id="lightblue_fixed_bottom_nav">
<nav class="navbar navbar-inverse navbar-fixed-bottom">
  <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" style="margin-top: -10px;" href="#"> <h1>Get Social</h1></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#"><img src="PICS/icons8-Facebook-48.png"/></a></li>
      <li><a href="#"><img src="PICS/icons8-WhatsApp-48.png"/></a></li>
      <li><a href="#"><img src="PICS/icons8-Twitter-50.png"/></a></li>
    </ul>
  </div>
</nav></div>
    
</body>
</html>
