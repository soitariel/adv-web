<?php include('signupdatabase.php') ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
        .topnav {
  overflow: hidden;
  background-color: black;
}
ul{
  text-align: left;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #EE8795;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #900C3F;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}
input[type=submit] {
  background-color: black;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #4A0259;
}


/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #581845;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
.btn {
  width: 50%;
  background-color: #900C3F;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}


/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
  <div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="collection.php">Collection</a>
  <a href="contact.php">Contact</a>
  <a href="blog.php">Blog</a>
  <a href="designer.php">Designers</a>
  <a href="designs.php">Designs</a>
  <a class="log" href="login.php">Login</a>
  <a class="log" href="signup.php">Signup</a>
</div>



<form  method="POST" action="signupdatabase.php" autocomplete="off" style="background: ;width:30%;padding:10px 0;margin-left:20%">
    <div class="row">
        
<input  type="text" name="username" placeholder="Username" required style="">
  <input  type="text" name="phonenumber" placeholder="phonenumber" required style="">
<input type="password" name="password" placeholder="Password" required>
   <input type="submit" value="Register" class="btn" name="reg_user">
     
      </div>
    <div><p >Already have an account?</p>
      <a href="login.php" style="color:white" class="btn">Login</a></div>
  </form>

<footer style="margin-top:50px;" >
  <div class="w3-container">
  <div class="w3-display-container w3-black" style="height:200px;">
 <div class="w3-display-left w3-padding">
  <h2 style="text-align: left">menu</h2>
  <ul style="list-style-type:none;">
<li><a href="index.php">Home</a></li>
  <li><a href="collection.php">Collection</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="blog.php">Blog</a></li>
  <li><a href="designer.php">Designer</a></li>
  <li><a class="log" href="login.php">Login</a></li>
  <li><a class="log" href="signup.php">Signup</a></li>
  </ul>

    </div>
    <div class="w3-display-right w3-padding">
       <h2>Contact</h2>
      <ul style="list-style-type:none;">
    <li><a href="tel:0792052668" class="fa fa-phone" style="font-size:24px"></a>call</li>
    <li><a href="mailto:harrietsoita9@gmail.com" class='fa fa-envelope' style='font-size:24px'></a>Email</li>
    <li><a href="https://twitter.com/login?harry=en" class="fa fa-twitter" style="font-size:24px"></a>Twitter</li>
    <li><a href="https://web.facebook.com/?missharrya" class="fa fa-facebook-f" style="font-size:24px"></a>Facebook</li>
    <li><a href="https://www.instagram.com/missharya/" class="fa fa-instagram" style="font-size:24px"></a>Instagram</li>

  
</ul>
</div>
<div class="w3-display-middle w3-padding">
<p>HARRY FASHIONS KENYA <i class='fa fa-copyright' style='font-size:24px'></i></p>
      
</div>
</div>
</div>
</footer>

</body>
</html>
