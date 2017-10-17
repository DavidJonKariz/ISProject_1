<?php
$con= mysqli_connect('localhost', 'root', '', 'is_project_one');
if ($con->connect_error) {
	die("Connection failed: " . $con->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Adminstrator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
                       </div>
                   </a>
               </div>
               <ul class="nav navbar-nav" >
                   <li class="active"><a href="adminhome.php" style="color: white;">Home</a></li>
                   <li><a href="#" style="color: white;">Wanna Join?</a></li>
                   <li class="navbar navbar-right"><a href="users/Adminstrator.php" style="color: white;">Manage Clubs</a></li>
               </ul>
           </div>
        </nav>
    </div>
    
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--<script type="text/javascript" src="JS/HHsearch.js"></script>-->
 	<title>Administrator</title> 
<!--<link rel="shortcut icon" type="image/x-icon" href="IMG-20170512-WA0002.jpg"/>   -->
<!--<link rel="stylesheet" type="text/css" href="CSS/HHsearch.css">-->
<!--
<style>
/*    ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    position: fixed;
    top: 0;
    width: 100%;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}*/    
button.accordion {
    background-color: #2196F3;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
    background-color: #ddd;
}

div.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
</style>
</head>

<body>

    
    
<div style=" width:27%; height: 90%; margin-top: 2%; margin-left: 10px;">
<button class="accordion">
  Club Activities
  </button>
  <div class="panel">
      <button class="w3-bar-item w3-button tablink" style="width:110%; margin-left: -17px;" onclick="openCity(event, 'Gold')"><img src="PICS/icons8-Event-30.png">Outdoor Event</button><br>
      <button class="w3-bar-item w3-button tablink" style="width:110%; margin-left: -17px;" onclick="openCity(event, 'Silver')"><img src="PICS/icons8-Confetti-30.png">Upcoming Events</button><br>
      <button class="w3-bar-item w3-button tablink" style="width:110%; margin-left: -17px;" onclick="openCity(event, 'Bronze')"><img src="PICS/icons8-Best Seller-30.png">Event Attendance</button><br>

  </div>

<button class="accordion">
   Manage Clubs
  </button>
  <div class="panel">
  <button class="w3-bar-item w3-button tablink" style="width:110%; margin-left: -17px;" onclick="openCity(event, 'Around')">Add or Remove Club</button><br>
  <button class="w3-bar-item w3-button tablink" style="width:110%; margin-left: -17px;" onclick="openCity(event, 'Madaraka')">Add or Remove Club Official</button><br>
  </div>
  
<button class="accordion">
  Clubs Details
  </button>
  <div class="panel">
  <button class="w3-bar-item w3-button tablink" style="width:110%; margin-left: -17px;" onclick="openCity(event, 'Small')">Members</button><br>
  <button class="w3-bar-item w3-button tablink" style="width:110%; margin-left: -17px;" onclick="openCity(event, 'Medium')">Meetings</button><br>
  <button class="w3-bar-item w3-button tablink" style="width:110%; margin-left: -17px;" onclick="openCity(event, 'Large')">Officials</button><br>
 

  </div>
</div>
<div style="margin-left:28%; margin-top:-23%;">

    
<div id="Gold" class="w3-container city" style="display:none">
 <div class="thumbnail">
   <div class="caption-full">
</div></div></div>
 
 
 

<div id="Silver" class="w3-container city" style="display:none">
  <div class="thumbnail">
   <div class="caption-full">
    
  </div>
       </div>
    </div> 
 

<div id="Around" class="w3-container city" style="display:none">
  <div class="thumbnail">
   <div class="caption-full">
     
  </div>
       </div>
    </div> 


<div id="Madaraka" class="w3-container city" style="display:none">
  <div class="thumbnail">
   <div class="caption-full">
    
  </div>
       </div>
    </div>
  
   
<div id="Small" class="w3-container city" style="display:none">
    <div class="thumbnail">
        <div class="caption-full">
</div></div></div>
   
     
<div id="Medium" class="w3-container city" style="display:none">
  <div class="thumbnail">
   <div class="caption-full">
     <h4>HOSTEL NAME<HR>HOSTEL AREA<HR>NO OF RESIDENTS<HR></h4></div>
  </div>
<div class="well">
<div class="text-right">DESCRIPTION</div>

 <hr>
 <div class="text-right">GEOLOCATION</div><hr>
       </div>
    </div>
     
      
<div id="Large" class="w3-container city" style="display:none">
  <div class="thumbnail">
   <div class="caption-full">
     <h4>HOSTEL NAME<HR>HOSTEL AREA<HR>NO OF RESIDENTS<HR></h4></div>
  </div>
<div class="well">
<div class="text-right">DESCRIPTION</div>

 <hr>
 <div class="text-right">GEOLOCATION</div><hr>
       </div>
    </div>
 </div>      
</body>
</html>
<script> 
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  }
}

function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-blue", ""); 
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-blue";
}

</script>

 

</body>
</html>-->



<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Manage Clubs</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <style>
            * {
	margin: 0;
	padding: 0;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

body {
	background: #2d2c41;
	font-family: 'Open Sans', Arial, Helvetica, Sans-serif, Verdana, Tahoma;
}

ul {
	list-style-type: none;
}

a {
	color: #b63b4d;
	text-decoration: none;
}

/** =======================
 * Contenedor Principal
 ===========================*/
h1 {
 	color: #FFF;
 	font-size: 24px;
 	font-weight: 400;
 	text-align: center;
 	margin-top: 80px;
 }

h1 a {
 	color: #c12c42;
 	font-size: 16px;
 }

 .accordion {
 	width: 100%;
 	max-width: 360px;
 	margin: 30px auto 20px;
 	background: #FFF;
 	-webkit-border-radius: 4px;
 	-moz-border-radius: 4px;
 	border-radius: 4px;
 }

.accordion .link {
	cursor: pointer;
	display: block;
	padding: 15px 15px 15px 42px;
	color: #4D4D4D;
	font-size: 14px;
	font-weight: 700;
	border-bottom: 1px solid #CCC;
	position: relative;
	-webkit-transition: all 0.4s ease;
	-o-transition: all 0.4s ease;
	transition: all 0.4s ease;
}

.accordion li:last-child .link {
	border-bottom: 0;
}

.accordion li i {
	position: absolute;
	top: 16px;
	left: 12px;
	font-size: 18px;
	color: #595959;
	-webkit-transition: all 0.4s ease;
	-o-transition: all 0.4s ease;
	transition: all 0.4s ease;
}

.accordion li i.fa-chevron-down {
	right: 12px;
	left: auto;
	font-size: 16px;
}

.accordion li.open .link {
	color: #b63b4d;
}

.accordion li.open i {
	color: #b63b4d;
}
.accordion li.open i.fa-chevron-down {
	-webkit-transform: rotate(180deg);
	-ms-transform: rotate(180deg);
	-o-transform: rotate(180deg);
	transform: rotate(180deg);
}

.accordion li.default .submenu {display: block;}
/**
 * Submenu
 -----------------------------*/
 .submenu {
 	display: none;
 	background: #444359;
 	font-size: 14px;
 }

 .submenu li {
 	border-bottom: 1px solid #4b4a5e;
 }

 .submenu a {
 	display: block;
 	text-decoration: none;
 	color: #d9d9d9;
 	padding: 12px;
 	padding-left: 42px;
 	-webkit-transition: all 0.25s ease;
 	-o-transition: all 0.25s ease;
 	transition: all 0.25s ease;
 }

 .submenu a:hover {
 	background: #b63b4d;
 	color: #FFF;
 }


        </style>
        </head>
    <body>

	<h1 style="color: black;">Manage Clubs </h1>
	<!-- Contenedor -->
	<ul id="accordion" class="accordion">
		<li>
			<div class="link"><i class=""></i>Club Activities<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
                            <li><a href="AdminEvents.php">Events</a></li>
                            <li><a href="adminUpcomingEvents.php">Upcoming Events</a></li>
                            <li><a href="AdminAttendance.php">Event Attendance</a></li>
			</ul>
		</li>
		<li>
			<div class="link"><i class=""></i>Manage Clubs<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
                            <li><a href="triallogin.php">Add or Remove Club Official</a></li>
				<li><a href="#">Add or Remove Club Member</a></li>
			</ul>
		</li>
		<li>
			<div class="link"><i class=""></i>Club Details<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
                            <li><a href="AdminMembers.php">Club Members</a></li>
				<li><a href="#">Club Meetings</a></li>
				<li><a href="#">Club Officials</a></li>
			</ul>
		</li>
                <li>
			<div class="link"><i class="fa fa-mobile"></i>Settings<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
                            <li><a href="">Block User</a></li>
				<li><a href="#">Block Post</a></li>
				<li><a href="#">Set Post</a></li>
			</ul>
		</li>
	</ul>        
    </body>
</html>
<script>
    $(function() {
	var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		// Variables privadas
		var links = this.el.find('.link');
		// Evento
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$next = $this.next();

		$next.slideToggle();
		$this.parent().toggleClass('open');

		if (!e.data.multiple) {
			$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
		};
	}	

	var accordion = new Accordion($('#accordion'), false);
});
</script>