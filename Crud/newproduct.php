
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
                
                    if(isset($_POST['addproduct']) || isset($_FILES['file'])):
                        
                        // Initialize variables
                        $productimage = $productcode = $productquantity = $producttitle = $productprice = $productdescription = ""; 
                        
                        $producttitle = $_POST['product_name'];
                        $productprice = $_POST['product_price'];
                        $productdescription = $_POST['product_dsc'];
                        $productquantity = $_POST['product_qty'];
                        $productcode = mt_rand(0,100000);// Generate a random number for the product code                    

                        $name = $_FILES['file']['name'];
                        // Rename file before uploading 
                        $temp = explode(".", $_FILES["file"]["name"]);
                        $newfilename = round(microtime(true)) . '.' . end($temp);
                        //
                        $target_dir = "upload/product-images/";
                        $target_file = $target_dir . basename($_FILES["file"]["name"]);

                        // Select file type
                        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                        // Valid file extensions
                        $extensions_arr = array("jpg","jpeg","png","gif");

                        // Check if product exists 
                        $check  = "SELECT * FROM products WHERE product_code = '$productcode' LIMIT 1"; 
                        $result = $mysqli->query($check); 
                        $exxt  = mysqli_fetch_assoc($result); 
                        // $productcode  = $exxt["product_code"]; 
                        
                        if($exxt["product_code"]):
                            ?> 
                                <!-- Show error message  -->
                                <div class="alert alert-danger m-0 alert-dismissible fade show rounded-0 border-0" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        <span class="sr-only">Close</span>
                                    </button>
                                    Hi, this product with code <?php echo $productcode; ?> already exists.
                                </div>
                            <?php           
                        else: 

                            // Insert into database query 
                            $addproduct = "INSERT INTO products (product_title, product_description, product_quantity, product_price, product_code, product_image, date_added) VALUES ('". $producttitle."', '". $productdescription."', '". $productquantity."', '". $productprice."', '". $productcode."', '". $newfilename."',  now())";

                            move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$newfilename);

                            if($mysqli->query($addproduct) === true): 
                                ?> 
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <?php echo $producttitle; ?> has been added. 
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
                            <form class="row" action="newproduct.php" method="post" attribute enctype="multipart/form-data">
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Product Name</label>
                                    <input type="text" class="form-control" name="product_name">
                                </div>
                                <div class="form-group">
                                    <label for="">Product Price</label>
                                    <input type="number" class="form-control" name="product_price">
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="">Product image</label>
                                        <input type="file" class="form-control-file" name="file" id="" placeholder="" aria-describedby="fileHelpId">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Product Quantity</label>
                                        <input type="number" class="form-control" name="product_qty">
                                    </div>
                                </div>
                               
                                </div>
                                <div class="col-md-6"> 
                                    <div class="form-group">
                                        <label for="">Product Description</label>
                                        <textarea class="form-control" name="product_dsc" id="" rows="3"></textarea>
                                    </div>
                                    <button name="addproduct" class="btn w-100 bg-dark text-white">Publish</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
<?php include 'partials/footer.php'; 