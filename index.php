
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

ul{
  text-align: left;
}
.hero-image {
 background-image:  url("beauty.jpg");
  height: 80%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #900C3F;
  color: white;
}

 form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px black;
  float: left;
  width: 80%;
  background: red;
}

form.example button {
  float: right;
  width: 20%;
  padding: 10px;
  background: black;
  color: white;
  font-size: 17px;
  border: 1px black;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: green;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}



.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}
input{






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
.center {
  text-align: center;
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
  
    <a class="log" href="login.php">Login</a>
  <a class="log" href="signup.php">Signup</a>
</div>

<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px;color: white">HARRY FASHIONS</h1>
    
  
  </div>
</div>

<div class="container">
   <h3 style="text-align: center;">What are you looking for?</h3>

 

  


</div>
<!--hggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg-->

<div class="container-fluid">
 

<div class="row">
  <div class="column">
    <div class="card">
      <img src="image10.jpg" alt="Jane" style="width:70%">
      <div class="container">
        <h2>Collection</h2>
        
        <p>Have a look at available fashions across Kenya</p>
        
        
        <p><a href ="ankara.php"><button class ="button" >Visit page</button></a></p>
        
      </div>
    </div>
  </div>
  <div class="row">
  <div class="column">
    <div class="card">
      <img src="image 300.jpeg" alt="" style="width:70%">
      <div class="container">
        <h2>Designers</h2>
        
        <p>Have a look at some of the best designs in Kenya</p>
        
        
    
        <p><a href ="designer.php"><button class ="button" >Visit page</button></a></p>
      </div>
    </div>
  </div>
  
  <div class="row">
  <div class="column">
    <div class="card">
      <img src="srs.jpg" alt="" style="width:70%">
      <div class="container">
        <h2>Blog</h2>
        
        <p>Looking for fashion?Get some tips from our blog</p>
        
        
    
        <p><a href ="blog.php"><button class ="button" >Visit page</button></a></p>
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
