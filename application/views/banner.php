<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        hello.colorlib@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        +65 11.188.888
                    </div>
                </div>
                <div class="ht-right">
                    <a href="<?php echo site_url('login'); ?>" class="login-panel"><i class="fa fa-user"></i>Login</a>
                </div>
                <div class="ht-right">
                    <a href="<?php echo site_url('register'); ?>" class="login-panel"><i class="fa fa-registered"></i>Register</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="./index.html">
                                <img src="<?php echo base_url('assets/img'); ?>/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">All Categories</button>
                            <div class="input-group">
                                <input type="text" placeholder="What do you need?">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span>3</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="si-pic"><img src="<?php echo base_url('assets/img/products'); ?>/Hot coffee2.jpg" alt="" width="50%"></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>฿50.00 x 1</p>
                                                            <h6>Americano</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>฿50.00</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="<?php echo site_url('ShoppingCart'); ?>" class="primary-btn view-card">VIEW CARD</a>
                                        <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-price">$฿50.00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>Other</span>
                        <ul class="depart-hover">
                          <ul class="dropdown">
                              <li><a href="<?php echo site_url('ShoppingCart'); ?>">Shopping Cart</a></li>
                              <li><a href="<?php echo site_url('CheckOut'); ?>">Checkout</a></li>
                              <li><a href="./register.html">Register</a></li>
                              <li><a href="./login.html">Login</a></li>
                          </ul>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li ><a href="<?php echo site_url('welcome'); ?>">Home</a></li>
                        <li ><a href="<?php echo site_url('shop'); ?>">Product</a>
                        <ul class="dropdown">
                                <li><a href="<?php echo site_url('shop'); ?>">Coffee Drink</a></li>
                                <li><a href="<?php echo site_url('shopcoffeebeans'); ?>">Coffee Beans</a></li>
                                <li><a href="<?php echo site_url('shopcoffeeequipment'); ?>">Coffee Equipment </a></li>
                            </ul></li>
                        <li><a href="<?php echo site_url('blog'); ?>">Blog</a></li>
                        <li><a href="<?php echo site_url('cousre'); ?>">Cousre</a></li>
                        <li><a href="<?php echo site_url('contact'); ?>">Contact</a></li>
                        <li><a href="<?php echo site_url('promotion'); ?>">Promotion</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
