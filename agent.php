<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

ul{
  text-align: left;
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

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
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

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
.center {
  text-align: center;
}
img {
  image-rendering: auto;
}


#more {display: none;}

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

<h2>HARRY FASHIONSKENYA</h2>
<br>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="elegant.jpg" alt="" style="width:100% height :50%">
      <div class="container">
        <h2>Elegant fashions</h2>
        
        <p><a href ="https://www.elegant.com/"><button class ="button" >Visit</button></a></p>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="sharko.png" alt="" style="width:100% height :50%">
      <div class="container">
        <h2>Shako collections</h2>
        
    
        <p><a href ="https://www.shakocollections.com/"><button class ="button" >Visit</button></a></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="adidas.jpg" alt="" style="width:100% height :50%">
      <div class="container">
        <h2>Adidas fashion</h2>
        
        
        <p><a href ="https://www.adidas.co.ke/"><button class ="button" >Visit</button></a></p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="dee.png" alt="" style="width:100% height :20%">
      <div class="container">
        <h2>Model Fashion</h2>
        
        
        
        <p><a href ="http://modelfashion.co.ke/"><button class ="button" >Visit</button></a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="model.png" alt="" style="width:100% height :50%">
      <div class="container">
        <h2></h2>
        
        
       
        <p><a href ="http://rossana.co.ke/"><button class ="button" >Visit</button></a></p>
      </div>
    </div>
  </div>


  <div class="column">
    <div class="card">
      <img src="rossana.png" alt="" style="width:100% height :50%">
      <div class="container">
        <h2>Rossana</h2>
        
        
    
        <p><a href ="http://www.fashion.com/"><button class ="button" >Visit</button></a></p>
      </div>
    </div>
  </div>
</div>




<footer >
  <div class="w3-container">
  <div class="w3-display-container w3-black" style="height:200px;">
    <div class="w3-display-left w3-padding">
      <h2 style="text-align: left">menu</h2>
      <ul style="list-style-type:none;">
    <li><a href="index.php">Home</a></li>
  <li><a href="collection.php">Collection</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="blog.php">Blog</a></li>
  <li><a href="designers.php">designers</a></li>
  <li><a class="log" href="login.php">Login</a></li>
  <li><a class="log" href="signup.php">Signup</a></li>
</ul>

    </div>
    <div class="w3-display-right w3-padding">
       <h2>Contact</h2>
      <ul style="list-style-type:none;">
    <li><a href="tel:0792052668" class="fa fa-phone" style="font-size:24px"></a>call</li>
    <li><a href="mailto:harrietsoita9387@gmail.com" class='fa fa-envelope' style='font-size:24px'></a>Email</li>
    <li><a href="https://twitter.com/login?harry" class="fa fa-twitter" style="font-size:24px"></a>Twitter</li>
    <li><a href="https://web.facebook.com/?harry" class="fa fa-facebook-f" style="font-size:24px"></a>Facebook</li>
    <li><a href="https://www.instagram.com/missharya" class="fa fa-instagram" style="font-size:24px"></a>Instagram</li>

  
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
