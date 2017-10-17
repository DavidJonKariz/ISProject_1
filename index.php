<?php
include 'connection.php';
    session_start();
    ?>
<!DOCTYPE html>
<html>
<head>
    
	<title>LOGIN</title>
<!--        CSS links-->
<link rel="stylesheet" type="text/css" href="CSS/login.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<!--        jscript links-->
<script type="text/javascript" src="JS/loginjs.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.3/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.3/sweetalert2.common.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.3/sweetalert2.common.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.3/sweetalert2.common.min.js.map"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.3/sweetalert2.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.3/sweetalert2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.3/sweetalert2.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.3/sweetalert2.min.css">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        
</head>

<body>

    
<div class="wrapper">
 <div class="container">
  <h1>Welcome</h1>

  <form class="form" action="index.php" method="POST" onsubmit="display()">
      <input type="text" placeholder="Student ID" name="ID" id="ID" required="required">
      <input type="password" placeholder="Password" name="password" id="password" required="required">
   <button type="submit" id="login-button" name="login">Login</button>
  </form>
  
 </div>

 <ul class="bg-bubbles">
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
 </ul>
</div>
  
</form>
    
</body>
</html>
<?php
//code for sql selecting club member login table
$sqlcmemberLogin = "SELECT * FROM `cmemberlogin`";
//$cmemberresult = mysqli_query($con,$sqlcmemberLogin);
//code for sql selecting admin login table
$sqladminLogin = "SELECT * FROM `adminlogin`";
$adminresult = mysqli_query($con,$sqladminLogin);
//code for sql selecting club official login table
$sqlcofficialLogin = "SELECT * FROM `cofficiallogin`";
//$cofficialresult = mysqli_query($con,$sqlcofficialLogin);

if(isset($_POST['login']))
{
    $adminid = isset($_POST["ID"]) ? $_POST["ID"] : '';
    $adminpassword = isset($_POST["password"]) ? $_POST["password"] : '';
    $sqladminLogin = "SELECT * FROM `adminlogin` WHERE ID ='$adminid' and password = '$adminpassword' ";
    $adminresult = mysqli_query($con,$sqladminLogin);

        
        if($adminresult)
        {
            //setting the session data
            $_SESSION['username'] = $admusername;
            $_SESSION['password'] = $adminpassword;?> 
            <script type=\"text/javascript\">
                function display(){
		swal(
                'Good job!',
                'You clicked the button!',
                'success'
                )
		setTimeout(function(){
		window.location.href = \"adminhome.php\";
	},2000);
    }
	</script>
//         <?php   echo $admId;
            header('Location: adminhome.php');
        }
     
}

mysqli_close($con);
?>



