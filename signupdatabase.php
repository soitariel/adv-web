<?php 
  session_start();

  // variable declaration
  $username = "";
  $email    = "";
  $errors = array(); 
  $_SESSION['success'] = "";

  // connect to database
  $db = mysqli_connect('localhost', 'root', '', 'fashion');

  // REGISTER USER
  if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $phonenumber = mysqli_real_escape_string($db, $_POST['phonenumber']);
    $password= mysqli_real_escape_string($db, $_POST['password']);
    

      //$password = md5($password_1);//encrypt the password before saving in the database

    $check = mysqli_query( $db,"select * from buyers where phonenumber = $phonenumber");
    //checks to see if phonenumber exists

    if(mysqli_num_rows($check) > 0){ //counts number of rows collected from  query
//if true, user already registered
      echo "<script> alert ('user already registered')</script>";
      echo "<script> setTimeout(function(){  window.location.href='login.php';}, 3)</script>";
    } else{
      $query = "INSERT INTO buyers (username, phonenumber, password) 
            VALUES('$username', '$phonenumber', '$password')";
      mysqli_query($db, $query);

      echo "<script> alert ('user registered successfully')</script>";
      echo "<script> setTimeout(function(){  window.location.href='login.php';}, 3)</script>"; 
    }
         

  }

  // ... 


  //close connection
mysqli_close($db);

?>