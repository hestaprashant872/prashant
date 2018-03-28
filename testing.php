<?php

$query=mysqli_query($link,"SELECT * FROM users WHERE Uid='".$_POST['uid']."' && Password='".$_POST['password']."'");
//$pquery=mysqli_query($link,"SELECT * FROM user_post WHERE Uid='".$_POST['uid']);
 $pquery=mysqli_query($link,"SELECT * FROM user_post WHERE Uid='".$_SESSION['uid']."'");

    $count=mysqli_num_rows($query);
    $countp=mysqli_num_rows($pquery);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="author" content="Team Hestabit">
    <meta name="description" content="">
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Hestabit &copy;</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--CDN FOR Font Awesom-->
  
    <link rel="stylesheet"  type="text/css" href="css\bootstrap.min.css"/>
<style type="text/css">
.header-section{
    background: url("images/pastel_blue.png");
    width: 100%;
    height: 105px;  
}
.post-body{
    background-image: url("images/image-2.jpg");
    width:100%;
    height: 770px;
    background-size: cover;
    position: relative;
    background-repeat: no-repeat;

}
.footer-section{
    background: url("images/pastel_blue.png");
    width: 100%;
    height: 115px;  
}
.header-text{
    font-size: 70px;
    color: white;
    text-align: ;
}
.custom-file-upload {
  border: 1px solid #ccc;
  display: inline-block;
  padding: 6px 12px;
  cursor: pointer;
}
.edit-button{
    text-align: center;
}
.profile{
    margin-top:20px;
    text-align: center;
}
.profile img{
border-radius: 50%;
}
.logout{
    font-size: 40px;
    color: white;
    text-align: center;
    
    margin-top: 15px;
}
.user-details ul{
list-style-type: none;
text-align: center;

}
.user-details ul li{
margin: 10px;
}
.user-details{
    text-align: center;
}
.feed{
    border:1px solid lightgray;
    padding-left: 30px;
}
.chat{
    position: relative;
    padding: 20px;
}
.type{
    position: absolute;
    padding: 1px;
    background-color: black; 
    border-radius: 50%;
    left:27px;
    transform: translate(-100%,100%);
    color:white;    
}


p a {
    color: white;
}
</style> 
 
    </head>
<body>

<div class="header-section">
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="header-text">
            <p><strong>Face<span style="color:#12cce5;">Look</strong></p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="logout">
            <p> <a href="#" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>    </p>
            </div>
        </div>      
    </div>
</div>
</div>
<br>
<div class="post-body">
    <div class="container">
        <div class="row">
            <div class="col-md-5" style="border: 1px solid lightgray;box-shadow: 0px 4px 48px 0px rgba(111,161,247,1);">
                <div class="user-details">
                    <ul>
                <li><div class="profile">
                    <p><img src="images/hesta.png" alt="userimage"></p>
                </div>
                </li>
                    <li><label for="inputsm">User-Name</label></li>
                    <li><label for="inputsm">First-Name</label></li>
                    <li><label for="inputsm">Last-Name</label></li>
                    <li><label for="inputsm">Email</label></li>
                    <li><label for="inputsm">Uid</label></li>
                    </ul>       
                   <!-- <button id="opener">Open Edit</button><br> -->
                   <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">open EDIT</button>

                </div>
                
            </div>
            <div class="col-md-7" style="">
                <form action="post.php" method="POST">
                    <div class="input-group">
                        <input type="text" class="form-control" name="post-text" id="upost">
                        <span class="input-group-btn">
                    <button class="btn btn-default" type="submit" name="post-button" onClick="return empty()">Post Here!!</button>
                        </span>
                    </div>
                <p>
                    <div class="form-group">
                            <label for="comment">Your Post</label>
                        
                            
                    </div>  
                    
                    <div class="feed">

                    <table>
                    <tr>
                    <td>
                    <div class="type"> &nbsp; I &nbsp;</div>
                    <div class="chat"><img src="images/hesta" alt="user_post_image_url"></div>
                    </td>
                    </tr>
                    <tr>
                    <td><div class="type"> &nbsp; T &nbsp; </div>
                    <div class="chat">
                    kjfj djjhdjdf jhjfvb jdfvjdbh v fhbvhfd vhdbhv
                    </div>
                    </td>
                    </tr>
                    <tr>
                    <td><div class="type"> &nbsp; I &nbsp;</div>
                    <div class="chat">
                    <img src="images/hesta" alt="user_post_image_url">
                    </div>
                    </td>
                    </tr>
                    </table>
                            
                    </div>  
                </p>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<div class="footer-section">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p align="center">Copy &copy; All Rights Reserved.</p>
        </div>
    </div>
</div>
</div>



 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div id="dialog" title="Edit Details" style="background-color: white">
     <form  action="edit.php" method="POST" role="form">
        <div class="form-group">
        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                    </div>
                                    <div class="form-group">
            <input type="text" name="fname" id="confirm-password" tabindex="2" class="form-control" placeholder="First Name">
                                    </div>
                        <div class="form-group">
            <input type="text" name="lname" id="confirm-password" tabindex="2" class="form-control" placeholder="Last Name">
                                    </div>                                  
                                    <div class="form-group">
            <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                    </div>
                            <div class="form-group">
            <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                    </div>
                                    
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
            <input type="submit" name="edit-submit" id="" tabindex="4" class="form-control btn btn-register" value="Edit Now">
                                            </div>
                                        </div>
                                    </div>
                                </form>
 
           </div>
    </div>
  </div>





<!--edit buuton form!
<div id="dialog" title="Edit Details" style="background-color: white">
    <form  action="edit.php" method="POST" role="form">
        <div class="form-group">
        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                    </div>
                                    <div class="form-group">
            <input type="text" name="fname" id="confirm-password" tabindex="2" class="form-control" placeholder="First Name">
                                    </div>
                        <div class="form-group">
            <input type="text" name="lname" id="confirm-password" tabindex="2" class="form-control" placeholder="Last Name">
                                    </div>                                  
                                    <div class="form-group">
            <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                                    </div>
                            <div class="form-group">
            <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                    </div>
                                    
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
            <input type="submit" name="edit-submit" id="" tabindex="4" class="form-control btn btn-register" value="Edit Now">
                                            </div>
                                        </div>
                                    </div>
                                </form>
</div>

<script type="text/javascript">
    $('#file-upload').change(function() {
  var i = $(this).prev('label').clone();
  var file = $('#file-upload')[0].files[0].name;
  $(this).prev('label').text(file);
});
//Function To Display Popup
$(function() {
    $( "#dialog" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000 
      }
    });
 
    $( "#opener" ).on( "click", function() {
      $( "#dialog" ).dialog( "open" );
    });
  });
//funtion to check post is disable when left empty
function empty() {
    var x;
    x = document.getElementById("upost").value;
    if (x == "") {
        alert("Please Either Post Something OR Pass Image URL");
        return false;
    };
}
</script>  -->

</body>
</html>

