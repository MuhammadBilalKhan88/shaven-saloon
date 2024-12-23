<?php
include("config.php");



?>
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="header-top">
                    <div class="col-lg-8 col-md-8 col-sm-9 col-xs-12 pd-0">
                        <div class="contact-info-top">
                            <ul class="list-inline">
                                <li><img src="images/icons/5.png" alt="" /><span>MON – SAT: 7.00–18.00</span></li>
                                <li><img src="images/icons/6.png" alt="" /><span><?php echo PHONE_NUMBER; ?></span></li>
                                <li><img src="images/icons/7.png" alt="" /><span><?php echo ADMIN_EMAIL; ?></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12 pd-0">

                        <div class="top-button text-right">

                            <a href="booking.php" class="btn4"><span>Book Now</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="main-header">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="logo-area">
                                <a href="index-2.php"><img src="images/logo/logo.png" alt="" /></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <div class="menu-area">
                                <nav>
                                    <ul class="list-inline">

                                        <!-- <li><a href="index.php">Home</a></li>
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="services.php">Our Services</a></li>
                                        <li><a href="ourteam.php">Our Team</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                        <li><a href="login.php">Signin</a></li>
                                        <li><a href="register.php">Signup</a></li>
                                      -->
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="services.php">Our Services</a></li>
                                        <li><a href="ourteam.php">Our Team</a></li>
                                        <li><a href="contact.php">Contact</a></li>

                                        <?php
                                        if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
                                            // Agar user logged in nahi hai
                                            echo '<li><a href="login.php">Signin</a></li>';
                                            echo '<li><a href="register.php">Signup</a></li>';
                                        } else {
                                            // Agar user logged in hai
                                            echo '<li><a href="logout.php"><span>Log Out</span></a></li>';
                                            echo $_SESSION['useremail'];
                                        }
                                        ?>



                                        <li class="menu-btn">
                                            <ul>
                                                <li><span class="search-ico"><img src="images/icons/8.png" alt="" /></span></li>
                                                <!-- <li>
                                                    <div class="cart-top">
                                                        <i class="fa-solid fa-user"></i>

                                                        <div class="nav-shop-cart" style="width: 300px!important;">
                                                            <div class="widget_shopping_cart_content">
                                                                <ul class="product_list_widget ">
                                                                    <li class="mini_cart_item">

                                                                        <p class="buttons">
                                                                            <span> <a href="#"><?php //echo ($_SESSION['useremail']) ?></a></span>
                                                                           
                                                                        </p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li> -->
                                            </ul>
                                        </li>
                                        <!-- <li class="menu-btn">
                                                <ul>
                                                    <li><span class="search-ico"><img src="images/icons/8.png" alt="" /></span></li>
                                                    <li>
                                                        <div class="cart-top">
                                                            <a href="#" class="cart-btn"><img src="images/icons/9.png" alt="" /><span>2</span></a>
                                                            <div class="nav-shop-cart">
                                                                <div class="widget_shopping_cart_content">
                                                                    <ul class="product_list_widget ">
                                                                        <li class="mini_cart_item">

                                                                            <a href="#">
                                                                                <img src="images/product/1.png" alt="" />
                                                                                <p class="product-name">Shop Item 01</p>
                                                                            </a>

                                                                            <p class="quantity">1 x
                                                                                <strong class="Price-amount">$200.00</strong>
                                                                            </p>

                                                                            <a href="#" class="remove" title="Remove this item">x</a>
                                                                        </li>
                                                                        <li class="mini_cart_item">

                                                                            <a href="#">
                                                                                <img src="images/product/1.png" alt="" />
                                                                                <p class="product-name">Shop Item 01</p>
                                                                            </a>

                                                                            <p class="quantity">1 x
                                                                                <strong class="Price-amount">$200.00</strong>
                                                                            </p>

                                                                            <a href="#" class="remove" title="Remove this item">x</a>
                                                                        </li>
                                                                        <li class="mini_cart_item">

                                                                            <a href="#">
                                                                                <img src="images/product/1.png" alt="" />
                                                                                <p class="product-name">Shop Item 01</p>
                                                                            </a>

                                                                            <p class="quantity">1 x
                                                                                <strong class="Price-amount">$200.00</strong>
                                                                            </p>

                                                                            <a href="#" class="remove" title="Remove this item">x</a>
                                                                        </li>
                                                                    </ul>/.product_list_widget 

                                                                    <p class="total">
                                                                        <strong>Subtotal:</strong>
                                                                        <span class="amount">$300.00
                                                                        </span>
                                                                    </p>

                                                                    <p class="buttons">
                                                                        <button class="btn1"><span>View Cart</span></button>
                                                                        <button class="btn3"><span>Checkout</span></button>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="search-box">
                                <form>
                                    <input type="search" placeholder="">
                                    <button><i class="fa fa-search"></i></button>
                                    <span class="close-search"><i class="fa fa-close"></i></span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Responsive Menu area-->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="index-2.php">Home</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="services.php">Services</a></li>
                                <li><a href="gallery.php">Gallery </a></li>
                                <li>
                                    <a href="#">Pages</a>
                                    <ul class="down-menu">
                                        <li><a href="about.php">about</a></li>
                                        <li><a href="blog.php">blog</a></li>
                                        <li><a href="blog-single.php">blog single</a></li>
                                        <li><a href="shop.php">Shop</a></li>
                                        <li><a href="shop-single.php">Shop single</a></li>
                                        <li><a href="booking.php">pricing tables</a></li>
                                        <li><a href="services.php">services</a></li>
                                        <li><a href="contact.php">contact</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">Blog</a>
                                    <ul class="down-menu">
                                        <li><a href="blog.php">blog</a></li>
                                        <li><a href="blog-single.php">blog single</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Responsive Menu area End-->
</header>