<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
ul{
  text-align: left;
}



/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}



/* Add a card effect for articles */
.card {
   background-color: black;
   color: white;
   padding: 20px;
   margin-top: 20px;
   margin-bottom: 0px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;

}
.collapsible {
  background-color: #F2AEA0;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  margin: 4px;
}

.active, .collapsible:hover {
  background-color: #441006;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: black;
  color: white;
}
/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
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
  <a class="log" href="login.php">Login</a>
  <a class="log" href="signup.php">Signup</a>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>ANKARA ATTIRES</h2>
      <img src="skirt6.jpg" alt="" style="width:50%">
      


<button type="button" class="collapsible">About </button>
<div class="content">
  <p>This is basically the african style that originated in the nigeria </p>
  <p>It involve use of vitenge fabrics to make clothes.</p>
</div>
<button type="button" class="collapsible">Users</button>
<div class="content">
 <p><b> Women</b></p>

<ul>
  <li>Most its worn by women during special events </li>
</ul>
<p><b>Men</b></p>

<ul>
  <li>Men wear them also during special occasions like weedings</li>

</ul>
</div>
<button type="button" class="collapsible">Our stores</button>
<div class="content">
  <ul>
  
<li> Mr prize</li>
<li>Garden city</li>
<li>Karen Waterfront</li>



</div>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>

    </div>
    </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>Gallery</h2>
      <div ><img src="slide11.jpg" alt="" style="width:50%"></div><br>
      <div ><img src="slide34.jpg" alt="" style="width:50%"></div><br>
      <div><img src="slide30.jpg" alt="" style="width:50%"></div><br>
      <div><img src="slide35.jpg" alt="" style="width:50%"></div><br>
      <div><img src="image45.jpg" alt="" style="width:50%"></div><br>
      

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
  <li><a href="designer.php">Designer</a></li>
  <li><a class="log" href="login.php">Login</a></li>
  <li><a class="log" href="signup.php">Signup</a></li>
</ul>

    </div>
    <div class="w3-display-right w3-padding">
       <h2>Contact</h2>
      <ul style="list-style-type:none;">
    <li><a href="tel:079202668" class="fa fa-phone" style="font-size:24px"></a>call</li>
    <li><a href="mailto:harrietsoita9@gmail.com" class='fa fa-envelope' style='font-size:24px'></a>Email</li>
    <li><a href="https://twitter.com/login?harry" class="fa fa-twitter" style="font-size:24px"></a>Twitter</li>
    <li><a href="https://web.facebook.com/?harry" class="fa fa-facebook-f" style="font-size:24px"></a>Facebook</li>
    <li><a href="https://www.instagram.com/missharya" class="fa fa-instagram" style="font-size:24px"></a>Instagram</li>

  
</ul>

    </div>
    <div class="w3-display-middle w3-padding">
     <p>HARRY FASHIONS  KENYA <i class='fa fa-copyright' style='font-size:24px'></i></p>
      

    </div>
    
  </div>
</div>
</footer>

</body>
</html>
