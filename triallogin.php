<!--<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet"  href="CSS/login.css">
        <title>trial login</title>
    </head>
    
    <body id="cas" class="login">
    
<div id="container" class="container">
<!--    <header>
    <a id="logo" href="http://www.strathmore.edu" target="_blank" title="Strathmore University">Strathmore</a>
</header>
    
<section ID="the_login_stuff">
<div id="content">
        <div class="row">
            <div id="notices" class="col-sm-12 col-md-6 col-md-push-6">
                <div id="cookiesDisabled" class="alert alert-info" style="display:none;">
    <h2>Browser cookies disabled</h2>
    <p>Your browser does not accept cookies. Single Sign On WILL NOT WORK.</p>
</div>
                
</div>
            <div class="col-sm-12 col-md-6 col-md-pull-6">
                
                <div class="box" id="login">
                    
    <div class="login-header">
        <h2>Login</h2>
        <span class="fa-stack fa-2x hidden-xs">
          <i class="fa fa-circle fa-stack-2x"></i>
          <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
        </span>
    </div>

    <form method="post" id="fm1">

        <h2>Enter your Username and Password</h2>

        <section class="row">
            <label for="username"><span class="accesskey">U</span>sername:</label><br>

            <div>
                <input class="required"
                       id="username"
                       size="25"
                       tabindex="1"
                       type="text"
                       accesskey="u"
                       autocomplete="off" name="username" value=""/></div>
        </section><br>

        <section class="row">
            <label for="password"><span class="accesskey">P</span>assword:</label><br>
            
            <div>
                <input class="required"
                       type="password"
                       id="password"
                       size="25"
                       tabindex="2"
                       accesskey="p"
                       autocomplete="off" name="password" value=""/><span id="capslock-on" style="display:none;">
                    <p>
                        <i class="fa fa-exclamation-circle"></i>
                        <span>CAPSLOCK key is turned on!</span>
                    </p>
                </span>
            </div><br><br>
        </section>
        <section class="row check">
            </section>
        
        <section class="row btn-row">
            <input type="hidden" name="execution" value=""/><input type="hidden" name="_eventId" value="submit"/><input type="hidden" name="geolocation"/><input class="btn btn-submit btn-block"
                   name="submit"
                   accesskey="l"
                   value="LOGIN"
                   tabindex="6"
                   type="submit" style="color: black;"/></section>
    </form>
        <script type="text/javascript">
        var i = "One moment please..."
        $("#fm1").submit(function() {
            $(":submit").attr("disabled", true);
            $(":submit").attr("value", i);
            return true;
        });
    </script>
    
</div>
</div>
        </div>
</div></section><br><br><hr>
    <footer>
    <div id="copyright" class="container">
        <p>Copyright &copy; Strathmore University. </p>
        <p>Powered by <a href="http://www.apereo.org/cas" target="_blank">Apereo Central Authentication Service</a>
        </p>
    </div>
</footer>
</div>


</body>
</html>-->
<?php
$link= mysqli_connect('localhost', 'root', '', 'is_project_one');
if ($link->connect_error) {
	die("Connection failed: " . $link->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <br/>
          <br/>
          <br/>
          <div class="table-responsive">
              <h3 align="center">Manage Officials</h3><br />
              <div id="live_data">
                  
              </div>
          </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  </body>
</html>


<script>
    $(document).ready(function(){
        function fetch_data()
        {
            $.ajax
            ({
                url:"select.php",
                method:"POST",
                success:function(data){
                    $('#live_data').html(data);
                }
            });
        }
        fetch_data();
        $(document).on('click','#btn_add',function(){
            var Student_ID =$('#Student_ID').text();
            var Student_Name =$('#Student_Name').text();
            var Contacts =$('#Contacts').text();
            var email =$('#email').text();
            var club_id =$('#club_id').text();
            var status =$('#status').text();
            var Club_Name=$('#Club_Name').text();
            if(Student_ID === '')
            {
                alert("Enter Student ID");
                return false;
            }
            if(Student_Name === '')
            {
                alert("Enter Student Name");
                return false;
            }
            if(Contacts === '')
            {
                alert("Enter Contact Details");
                return false;
            }
            if(email === '')
            {
                alert("Enter Email address");
                return false;
            }
            if(status === '')
            {
                alert("Enter Member's Status");
                return false;
            }
            if(club_id === '')
            {
                alert("Enter Club's ID");
                return false;
            }
            if(Club_Name === '')
            {
                alert("Enter Club's Name");
                return false;
            }
            $.ajax({
                url:"insert.php",
                method:"POST",
                data:{Student_ID:Student_ID, Student_Name:Student_Name, Contacts:Contacts, email:email, status:status, club_id:club_id, Club_Name:Club_Name},
                dataType:"text",
                success:function(data){
                    alert(data);
                    fetch_data();
                }
            });
        });
        function edit_data(id, text, column_name)  
      {  
           $.ajax({  
                url:"edit.php",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data); 
                     fetch_data();
                }  
           });  
      }
      $(document).on('blur', '.Student_ID', function(){  
           var id = $(this).data("id1");  
           var Student_ID = $(this).text();  
           edit_data(id, Student_ID, "Student_ID");  
      });  
      $(document).on('blur', '.Student_Name', function(){  
           var id = $(this).data("id2");  
           var Student_Name = $(this).text();  
           edit_data(id,Student_Name, "Student_Name");  
      });
      $(document).on('blur', '.Contacts', function(){  
           var id = $(this).data("id3");  
           var Contacts = $(this).text();  
           edit_data(id,Contacts, "Contacts");  
      });
      $(document).on('blur', '.email', function(){  
           var id = $(this).data("id4");  
           var email = $(this).text();  
           edit_data(id,email, "email");  
      });
      $(document).on('blur', '.status', function(){  
           var id = $(this).data("id5");  
           var status = $(this).text();  
           edit_data(id,status, "status");  
      });
      $(document).on('blur', '.club_id', function(){  
           var id = $(this).data("id6");  
           var club_id = $(this).text();  
           edit_data(id,club_id, "club_id");  
      });
      $(document).on('blur', '.Club_Name', function(){  
           var id = $(this).data("id7");  
           var Club_Name = $(this).text();  
           edit_data(id,Club_Name, "Club_Name");  
      });
      $(document).on('click', '.btn_delete', function(){  
           var id=$(this).data("id8");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                     url:"delete.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function(data){  
                          alert(data);  
                          fetch_data();  
                     }  
                });  
           }  
      });
    });
    </script>