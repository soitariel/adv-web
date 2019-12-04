


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}
ul{
  text-align: left;
}

/* style the container */
.container {
  position: relative;
  border-radius: 5px;
  background-color: white;
  padding: 20px 0 30px 0;
} 
/* style inputs and link buttons */
input{
  width: 70%;
  margin:2% 0 2% 15%;
  background-color: white;
  padding: 12px;
  border-radius: 4px;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  color:black;
  text-decoration: none; /* remove underline from anchors */
}
textarea{

width: 70%;
  margin:2% 0 2% 15%;
  background-color: white;
  padding: 12px;
  border-radius: 4px;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  color:black;
  text-decoration: none;

}
.btn {
  width: 70%;
  margin:2% 0 2% 15%;
  background-color: #900C3F;
  padding: 12px;
  border: none;
  border-radius: 4px;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}



/* style the submit button */
input[type=submit] {
  background-color: black;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #4A0259;
}

/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* vertical line */


/* bottom container */
.bottom-container {
  text-align: center;
  background-color: black;
  margin-top: 10px;
  margin-bottom: 20px;
}

/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  
}
</style>
</head>
<body>
  <div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="collection.php">Collection</a>
    <a href="designdetails.php">design details</a>
<a href="uploadimage.php">Upload designs</a>
<a href="buyerimages.php">Buyer designs</a>

   
 <a class="log" href="designerlog.php">Login</a>
 <a  class="log" href="designerlogout.php">Log out</a>
  
</div>
<div class="header">
  <h2>
  <?php

session_start();
  echo " Welcome, ".$_SESSION['contractor'];
?>
<i class=" fa fa-smile-o" style="font-size:24px;color: black"></i></h2>
</div>


<h2>Enter design details</h2>


<div class="container">
  <form  method="POST" action="details.php" autocomplete="off" style="background: ;width:30%;padding:10px 0;margin-left:20%">
    
    <div class="row">
        
<fieldset>
        <input  type="text" name="username" placeholder="enter username" required="">  
        <input  type="text" name="startdate" placeholder="date when construction began" >
        <input  type="text" name="enddate" placeholder="date when construction ends" >
        <label>design materials used</label><textarea name="design materialused">         </textarea></br>
        <label>design materials remaining</label><textarea name="design materialrem">         </textarea></br>
        <label>design materials needed</label><textarea name="design materialneeded">         </textarea>
        <input  type="text" name="deposit" placeholder="deposit paid" >
        <input  type="text" name="balance" placeholder="balance remaining" >
        

        <input type="submit" value="Submit" name="login_constr">
     
      </fieldset>
    </div>
   
  </form>
</div>


      
    
    
  
<footer style="margin-top:50px;">
  <div class="w3-container">
  <div class="w3-display-container w3-black" style="height:200px;">
    <div class="w3-display-left w3-padding">
      <h2 style="text-align: left">menu</h2>
      <ul style="list-style-type:none;">
    <li><a href="index.php">Home</a></li>
  <li><a href="Collection.php">Collection</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="blog.php">Blog</a></li>
  <li><a href="designers.php">Designers</a></li>
  <li><a class="log" href="login.php">Login</a></li>
  <li><a class="log" href="signup.php">Signup</a></li>
</ul>

    </div>
    <div class="w3-display-right w3-padding">
       <h2>Contact</h2>
      <ul style="list-style-type:none;">
    <li><a href="tel:0792052668" class="fa fa-phone" style="font-size:24px"></a>call</li>
    <li><a href="mailto:harrietsoita9@gmail.com" class='fa fa-envelope' style='font-size:24px'></a>Email</li>
    <li><a href="https://twitter.com/login?harry" class="fa fa-twitter" style="font-size:24px"></a>Twitter</li>
    <li><a href="https://web.facebook.com/harry" class="fa fa-facebook-f" style="font-size:24px"></a>Facebook</li>
    <li><a href="https://www.instagram.com/missharrya" class="fa fa-instagram" style="font-size:24px"></a>Instagram</li>

  
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
