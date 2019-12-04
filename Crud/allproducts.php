
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
                                            <li class="list-inline-item">All Products</li>
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
                        <div class="row">
                            <div class="col-md-12">
                                <?php                     
                                
                                // Include database connection 
                                include_once('../connection/connection.php'); 
                                
                                $query = "SELECT * FROM products"; 

                                $result = $mysqli->query($query); 
                                ?>

                                <table class="table table-striped table-borderless">
                                    <tr>
                                        <td>No</td>
                                    <td>Product Name</td>
                                    <td>Product description</td>
                                        <td>Product Quantity</td>
                                    </tr>

                                    <tbody>
                                    <?php 

                                    $i = 0; 

                                    while($productitem=mysqli_fetch_array($result)){

                                        $i++; 
                                        ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><img class="all-products-thumbnails" src="upload/product-images/<?php echo $productitem['product_image']; ?>" alt=""></td>
                                                <td><?php echo $productitem['product_name']; ?></td>
                                                <td><?php echo $productitem['product_description']; ?></td>
                                
                                                <td><?php echo $productitem['product_quantity']; ?></td>
                                            </tr>
                                    <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<?php include 'partials/footer.php'; 