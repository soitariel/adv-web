<?php

  // connect to database
  $db = mysqli_connect('localhost', 'root', '', 'fashion');


  // ... 

  // LOGIN USER
  if (isset($_POST['login_user'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

      $query = "SELECT * FROM buyers WHERE username='$username' AND password='$password'";
      $results = mysqli_query($db, $query) ;

      if (mysqli_num_rows($results) > 0) {
        session_start();
        $_SESSION['buyers'] = $username;
        $_SESSION['buyers_pass'] = $password;

        echo "<script> alert ('You are now logged in')</script>" . mysqli_error($db);
        echo "<script> setTimeout(function(){  window.location.href='personal.php';}, 3)</script>";
      }else {
        echo "<script> alert ('Wrong username/password combination')</script>" . mysqli_error($db);
        echo "<script> setTimeout(function(){  window.location.href='login.php';}, 3)</script>";
      }
     // LOGIN designers
  }else if (isset($_POST['login_contr'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

     //mysqli_query($db,"insert into designers (username,password) values('$username','$password')");
      $query = "SELECT * FROM designers WHERE username='$username' AND password='$password'";
      $results = mysqli_query($db, $query) ;

      if (mysqli_num_rows($results) > 0) {
        session_start();
         $_SESSION['contractor'] = $username;
        $_SESSION['contractor_pass'] = $password;

        echo "<script> alert ('You are now logged in')</script>" . mysqli_error($db);
        echo "<script> setTimeout(function(){  window.location.href='index.php';}, 3)</script>";
      }else {
        echo "<script> alert ('Wrong username/password combination')</script>" . mysqli_error($db);
        echo "<script> setTimeout(function(){  window.location.href='login.php';}, 3)</script>";
      }   
    
  }
  //close connection
mysqli_close($db);

?>