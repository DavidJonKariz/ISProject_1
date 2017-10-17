<?php
$con= mysqli_connect('localhost', 'root', '', 'is_project_one');
if ($con->connect_error) {
	die("Connection failed: " . $con->connect_error);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administrator</title>
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
        <li><a href="users/clubs.php">Wanna Join?</a></li>
      <li class="navbar navbar-right"><a href="users/Adminstrator.php">Manage Clubs</a></li>
    </ul>
      <form class="navbar-form navbar-right" style="margin-top: 20px;">
      <div class="input-group">
        <input type="text" class="form-control" name="Search" placeholder="Search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit" >
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</nav>
</div>
    <?php  
echo'
<html>
    <head>
<style>        #search {
            margin-left: 70%;
            width: 300px;
            border: 2px solid black;
            border-radius: 4px;
            font-size: 16px;
            background-color: white;
            background-image: url("icons8-Search-64.png");
            background-size: 20px;
            background-position: 10px 10px; 
            background-repeat: no-repeat;
            padding: 12px 20px 12px 40px;
            border-radius: 20px;
}
</style>
</head>
<body>';
        echo'</body>';
        echo'</html>';
if (!isset($_POST["Search"]))
{
$res=mysqli_query($con,"SELECT * FROM `events`");
    echo'
<html>
    <head>

</head>
<body>
<h2>Club Activities</h2>
<div class="table-responsive">';
    echo "<table class=\"table table-hover\">";
   
    echo "<tr>";
    echo "<th>"; echo "Event"; echo "</th>";
    echo "<th>"; echo "Club Name"; echo "</th>";
    echo "<th>"; echo "In Attendance"; echo "</th>";
    echo "<th>"; echo "Status"; echo "</th>";
    echo "<th>"; echo "Date(YY-MM-DD)"; echo "</th>"; 
    echo "</tr>";
    while ($row=mysqli_fetch_array($res)) {
        echo "<tr>";
        echo "<td>"; echo $row ["eventName"];  echo "</td>";
        echo "<td>"; echo $row ["ClubName"];  echo "</td>";
        echo "<td>"; echo $row ["InAttendance"];  echo "</td>";
        echo "<td>"; echo $row ["status"];  echo "</td>";
        echo "<td>"; echo $row ["Date"];  echo "</td>";        
        echo "</tr>";
}
        echo "</table></div><br>";
        echo'</body>';
        echo'</html>';
}
if (isset($_POST["Search"]))
{
 $res=mysqli_query($con,"SELECT * FROM `events` WHERE `eventName`= '$_POST[Search]' OR `ClubName`= '$_POST[Search]' OR `InAttendance`= '$_POST[Search]' OR `status`='$_POST[Search]' OR `Date`='$_POST[Search]'");
   echo'
<html>
    <head>
</head>
<body>
<h2> Search Results..</h2>
<div class="table-responsive">';
    echo "<table class=\"table table-hover\">";
   
    echo "<tr>";
    echo "<th>"; echo "Club ID"; echo "</th>";
    echo "<th>"; echo "Club Name"; echo "</th>";
    echo "<th>"; echo "Club Activity"; echo "</th>";
    echo "<th>"; echo "Club status"; echo "</th>";
    echo "<th>"; echo "Date(YY-MM-DD)"; echo "</th>"; 
    echo "</tr>";
    while ($row=mysqli_fetch_array($res)) {
        echo "<tr>";
        echo "<td>"; echo $row ["club_ID"];  echo "</td>";
        echo "<td>"; echo $row ["club_Name"];  echo "</td>";
        echo "<td>"; echo $row ["club_activities"];  echo "</td>";
        echo "<td>"; echo $row ["club_status"];  echo "</td>";
        echo "<td>"; echo $row ["Date"];  echo "</td>";        
        echo "</tr>";
}
        echo "</table></div>";
        echo'</body>';
        echo'</html>';
}
?>     
