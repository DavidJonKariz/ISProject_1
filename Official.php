<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Official</title>
        <style>

</style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet"  href="CSS/homepage.css">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="http://malsup.github.com/jquery.cycle.all.js"></script>
<style>

</style>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    
    
<body style="background-color: #EEEEEE;">
<div style="fixed: top;">
<nav class="navbar navbar-light" style="background-color: #64B5F6">
  <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="#">
            <div class="erclogo"><img src='PICS/erc_logo-01_fw_large.png' width='300' height='100' style="margin-top: -18px; margin-left: -19px;
                 height: 76.5px; border-bottom-right-radius: 3%; border-top-right-radius: 5%; border-bottom-left-radius: 5%;">
        </div></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Wanna Join?</a></li>
      <li class="navbar navbar-right"><a href="#">Club official</a></li>
      <li style="text-align: right;"><a href="users/Adminstrator.php">Administrator</a></li>
    </ul>
<!--      <form class="navbar-form navbar-right">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>-->
  </div>
</nav>
</div>
    
<div style='background-color: white; margin-top: 30px;'>
 
<!--Automatic Slide Show-->       
<div class="w3-content w3-section">
  <div id="slideshow">
      <center><div class="slideshow" style="margin-left: -50px;">
                <img src="PICS/Slideshow/1130kenyadrill.jpg" width="1000" height="400" />
		<img src="PICS/Slideshow/dataanalytics.png" width="1000" height="400" />
		<img src="PICS/Slideshow/img_1140.jpg" width="1000" height="400" />
		<img src="PICS/Slideshow/meuylcm6ejybeied_crxzjnckf_zimu_whhquvs2mmy.jpg" width="1000" height="400" />
		<img src="PICS/Slideshow/strathmore-uni.jpg" width="1000" height="400" />
	</div></center>
   
</div>
</div>

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
<!--DID YOU KNOW HTML-->    
<section class = "Dyk" style="">
<div id="Dyk">
        <h2 style="color:black;">Did You Know?</h2>
</div>
</section>

<!--UPCOMING EVENTS HTML-->    
<section class="UE">
<div id="UE">
        <h2 style="color:black;">Upcoming Events</h2>
</div></section>
</body>
</html>
