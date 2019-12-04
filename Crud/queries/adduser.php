<?php 

 // Include database connection 
 include_once('../../../connection/connection.php');
                
 if(isset($_POST['add_user_button'])): 

     // Initialize variables
     $profilepicture=$ufname = $uemail = $upassword = $role=$phoneno=""; 

     $ufname         = $_POST['user_fullname'];
     $uemail         = $_POST['user_email'];
     $uphone         = $_POST['user_phone'];
     $urole          = $_POST['user_role'];
     $upassword      = md5($_POST['user_password']);

     // Check if email exists 
     $check  = "SELECT * FROM users WHERE email = '$uemail' LIMIT 1"; 
     $result = $mysqli->query($check); 
     $email  = mysqli_fetch_assoc($result); 
     $email  = $email["email"]; 
     
     if($email):
         ?> 
             <!-- Show error message  -->
             <div class="alert alert-danger m-0 alert-dismissible fade show rounded-0 border-0" role="alert">
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     <span class="sr-only">Close</span>
                 </button>
                 Hi, this email <?php echo $uemail; ?> already exists.
             </div>
         <?php           
      else: 
         
     // Insert into database query 
     $register   = "INSERT INTO users (fullnames, email, phone_number, role, password, created_at) VALUES ('". $ufname."', '". $uemail."', '". $uphone."', '". $urole."', '". $upassword."', now())";
     
     if($mysqli->query($register) === true): 
         $firstname = ""; 
         $firstname = explode(" ", $ufname);
         $firstname[0]; 

         echo  $profilepicture; 
         ?> 
             <div class="alert alert-success alert-dismissible fade show" role="alert">
                 Congratulations <?php echo $firstname[0]; ?>, you have successfully registered
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
         <?php       

            //  // Instantiation and passing `true` enables exceptions
            //  $mail = new PHPMailer();

            //  try {
            //      //Server settings
            //      $mail->SMTPDebug    = 0;     
            //      $mail->Debugoutput  = 'html';                 // Enable verbose debug output
            //      $mail->isSMTP();                                            // Send using SMTP
            //      $mail->Host         = 'smtp.gmail.com'; 
            //      $mail->SMTPSecure   = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
            //      $mail->Port         = 25;                     // Set the SMTP server to send through
            //      $mail->SMTPAuth     = true;                                   // Enable SMTP authentication
            //      $mail->Username     = 'wafulawanjalaedgar@gmail.com';                     // SMTP username
            //      $mail->Password     = 'Makaveli61549';                                      // SMTP password                                  // TCP port to connect to

            //      //Recipients
            //      $mail->setFrom('registration@318studios.com', '318 Studios');
            //      $mail->addAddress($uemail , $ufname);     // Add a recipient              // Name is optional
            //      $mail->addReplyTo('dancankimani70@gmail.com', 'Information');
            //      // $mail->addCC('cc@example.com');
            //      // $mail->addBCC('bcc@example.com');

            //      // Content
            //      $mail->isHTML(true);                                  // Set email format to HTML
            //      $mail->Subject = 'New User Registration';
            //      $mail->Body    = 'Hi, '. $firstname[0].', <br><br> You have successfully created your account with us. <br><br>Thank you.';
            //      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            //      $mail->send();
                 
                 // echo 'Message has been sent';
             } catch (Exception $e) {
                 // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
             }
     else:
         echo $mysqli->connect_error;
     endif; 
 endif; 
 endif; 
?>