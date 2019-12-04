    <?php                     
                                
        // Include database connection 
        include_once('../connection/connection.php'); 
        
        $query = "SELECT * FROM products"; 

        $result = $mysqli->query($query);       
        $num_rows = mysqli_num_rows($result); 
    ?>
        
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="index.php">
                    <h1 class="text-white">p<i>a</i>ri</h1>
                </a>
            </div>
                <?php
                    $username = "SELECT * FROM users where user_id='".$_SESSION['auth_id']."'"; 
                    $result = $mysqli->query($username); 
                    $row = $result->fetch_assoc(); 
                    ?>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="upload/user-profiles/<?php echo $row['profile_image']; ?>" alt="" />
                    </div>
                    <h4 class="name"><?php echo $row['user_name']; ?></h4>
                    <a href="logout.php">Sign out</a>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="allproducts.php">
                                <i class="fas fa-chart-bar"></i>Products</a>
                            <span class="inbox-num"><?php         echo $num_rows;  ?></span>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="newproduct.php">
                                        <i class="fas fa-sign-in-alt"></i>New Product</a>
                                </li>
                                <li>
                                    <a href="allproducts.php">
                                        <i class="fas fa-sign-in-alt"></i>All Product</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

