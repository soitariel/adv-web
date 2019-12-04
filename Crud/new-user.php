
    <?php 
// Load header
include 'partials/header.php'; 
include 'partials/sidebar.php'; 
?>
        <!-- PAGE CONTAINER-->
        <div class="page-container2">
        <?php include 'partials/header-panel.php'; ?>

            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">You are here:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="#">Home</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">New Product</li>
                                        </ul>
                                    </div>
                                    <?php 
                                        include 'partials/new-item-button.php'; 
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <!-- STATISTIC-->
            <section class="statistic">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <?php 
                
                    // Include database connection 
                    include_once('../connection/connection.php');
                
                    if(isset($_POST['newuser']) || isset($_FILES['file'])):

                        $user_name = $user_email = $user_bio = $user_phone = ""; 
                        
                        $user_name      = $_POST['full_name']; 
                        $user_email     = $_POST['email_address']; 
                        $user_phone     = $_POST['phone_number']; 
                        $user_bio       = $_POST['bio_description']; 
                        $user_password  = md5($_POST['user_password']); 

                        $name = $_FILES['file']['name'];
                        // Rename file before uploading 
                        $temp = explode(".", $_FILES["file"]["name"]);
                        $newfilename = round(microtime(true)) . '.' . end($temp);
                        //
                        $target_dir = "upload/user-profiles/";
                        $target_file = $target_dir . basename($_FILES["file"]["name"]);

                        // Select file type
                        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                        // Valid file extensions
                        $extensions_arr = array("jpg","jpeg","png","gif");

                        // Check if user exists 
                        $check  = "SELECT * FROM users WHERE email = '$user_email' LIMIT 1"; 
                        $result = $mysqli->query($check); 
                        $exxt  = mysqli_fetch_assoc($result); 
                        
                        if($exxt["email"]):
                            ?> 
                                <!-- Show error message  -->
                                <div class="alert alert-danger m-0 alert-dismissible fade show rounded-0 border-0" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        <span class="sr-only">Close</span>
                                    </button>
                                    Hi, the user with email <?php echo $user_email; ?> already exists.
                                </div>
                            <?php           
                        else: 

                            // Insert into database query 
                            $adduser = "INSERT INTO users (user_name, email, profile_image, telephone_number, bio_dsc, user_password, created_at) VALUES ('". $user_name."', '". $user_email."', '". $newfilename."', '". $user_phone."', '". $user_bio."', '". $user_password."', now())";

                            move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$newfilename);

                            if($mysqli->query($adduser) === true): 
                                ?> 
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <?php echo $user_name; ?> has been added. 
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php       
                            else:
                                echo $mysqli->connect_error;
                            endif;
                        endif; 
                    endif; 
                ?>
                        <div class="">
                            <form class="row" action="new-user.php" method="post" attribute enctype="multipart/form-data">
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Full Name</label>
                                    <input type="text" class="form-control" name="full_name">
                                </div>
                                <div class="form-group">
                                    <label for="">Email Address</label>
                                    <input type="email" class="form-control" name="email_address">
                                </div>
                                <div class="form-group">
                                        <label for="">Profile image</label>
                                        <input type="file" class="form-control-file" name="file" id="" placeholder="" aria-describedby="fileHelpId">
                                </div>
                                <div class="form-group">
                                    <label for="">Telephone Number</label>
                                    <input type="telephone" class="form-control" name="phone_number">
                                </div>
                                </div>
                                <div class="col-md-6"> 
                                    <div class="form-group">
                                        <label for="">Bio</label>
                                        <textarea class="form-control" name="bio_description" id="" rows="3"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" class="form-control" name="user_password">
                                    </div>
                                    <button name="newuser" class="btn w-100 bg-dark text-white">Add new user</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
<?php include 'partials/footer.php'; 