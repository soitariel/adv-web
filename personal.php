

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Add a gray background color with some padding */
body {
  font-family: Arial;
  padding: 20px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 20px;
  font-size: 20px;
  text-align: center;
  background: white;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.middlecolumn {   
  float: left;
  width: 50%;
}

/* Right column */
.rightcolumn {
  float: right;
  width: 25%;
  padding-right: 20px;
}
.leftcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}



/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
   background-color: white;
   padding: 20px;
   margin-top: 15px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}
button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 50%;
}

button:hover {
  background-color: #555;
}
.collapsible {
  background-color: black;
  color: white;
  cursor: pointer;
  padding: 10px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 10px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #f1f1f1;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .middlecolumn, .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
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
  <a href="designers.php">Designers</a>
    <a class="log" href="logout.php">log out</a>
</div>

<div class="header">
  <h2><?php
  session_start();
  echo " Welcome, ".$_SESSION['buyers'];
  ?>
<i class=" fa fa-smile-o" style="font-size:24px;color: black"></i></h2>
</div>

<div class="row">
 <div class="leftcolumn">
   <div class="card">
     <img src="image 396.jpg" alt="designer" style="width:50%">
      <div class="container">
        <h2>Kenyan Designer</h2>
        
        <p>To find out more about the designer you are working with:</p>
        
        
        <p><a href ="http://www.thisisess.com/"><button class ="button" >Visit page</button></a></p>
        
      </div>
      
    </div>
    <div class="card" style="height: 70%">
      <p>Details about  my attires</p>
      <div class="card">
      <img src="image 45.jpg" alt="" style="width:100%">
      
      
 <h2>Africa designer </h2>
  <p class="title">Dress</p>
  <p>Ladies</p>
  <p>Orange</p>
  <p>Price: From Kshs 1500</p>
        
        <p><a href ="ankara.php"><button class ="button" >Read more</button></a></p>
    
    </div>
      
   </div>
    
    </div>
    <!--hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh-->
  <div class="middlecolumn">
    <div class="card">
      
   <div class="container">
   <h3 style="text-align: center;">Fashion Brands?</h3>
   <div class="card">
      <img src="yy.jpg" alt="" style="width:100%">
      
        <h2>Zipped </h2>
        <p class="title">Dress</p>
        <p>Gucci dress</p>
        <p><a href ="ankara.php"><button class ="button" >Read more</button></a></p>
    
    </div>
      
  



</div>

    </div>
    
  </div>
  <!--hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh-->
  <div class="rightcolumn">
    <div class="card">
     <img src="image10.jpg" alt="Jane" style="width:70%">
      <div class="container">
        <h2>Collection</h2>
        
        <p>Have a look at available designs across Kenya</p>
        
        
        <p><a href ="collection.php"><button class ="button" >Visit page</button></a></p>
        
      </div>
      
    </div>
    <div class="card">
      <img src="slide2.jpg" alt="John" style="width:50%">
      <div class="container">
        <h2>Blog</h2>
        
        <p>Get some tips from our blog</p>
        
        <p><a href ="blog.php"><button class ="button" >Visit page</button></a></p>
      </div>
      </div>
  
    
    </div>
  </div>
</div>
</div>

<footer >
  <p><div class="w3-container">
  <div class="w3-display-container w3-black" style="height:200px;">
    <div class="w3-display-left w3-padding">
      <h2 style="text-align: left">menu</h2>
      <ul style="list-style-type:none;">
    <li><a href="index.php">Home</a></li>
  <li><a href="collection.php">Collection</a></li>
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
    <li><a href="https://twitter.com/login?lang=en" class="fa fa-twitter" style="font-size:24px"></a>Twitter</li>
    <li><a href="https://web.facebook.com/?_rdc=1&_rdr" class="fa fa-facebook-f" style="font-size:24px"></a>Facebook</li>
    <li><a href="https://www.instagram.com/missharrya/" class="fa fa-instagram" style="font-size:24px"></a>Instagram</li>

  
</ul>

    </div>
    <div class="w3-display-middle w3-padding">
     <p>HARRY FASHIONS KENYA <i class='fa fa-copyright' style='font-size:24px'></i></p>
      


    </div>
    
  </div>
</div></p>
</footer>



</body>
</html>
