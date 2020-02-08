<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="./index.html">
                                <img src="<?php echo base_url('assets/img'); ?>/footter.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7" >
                        <div class="advanced-search">
                            <button type="button" class="category-btn">All Categories</button>
                            <div class="input-group">
                                <input type="text" placeholder="What do you need?">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                      <div class="ht-right">
                        <a href="<?php echo site_url('login'); ?>"><button type="button" class="btn btn-warning"><i class="fa fa-user"></i>&nbsp; Login</button>
                          <a href="<?php echo site_url('register'); ?>"><button type="button" class="btn btn-warning"><i class="fa fa-registered"></i>&nbsp; Register</button>
                      </div>
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
                              <li><a href="<?php echo site_url('Register'); ?>">Register</a></li>
                              <li><a href="<?php echo site_url('Login'); ?>">Login</a></li>
                          </ul>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li ><a href="<?php echo site_url('welcome'); ?>">Home</a></li>
                        <li ><a href="<?php echo site_url('product'); ?>">Product</a>
                        <ul class="dropdown">
                                <li><a href="<?php echo site_url('shop'); ?>">Coffee Drink</a></li>
                                <li><a href="<?php echo site_url('shopcoffeebeans'); ?>">Coffee Beans</a></li>
                                <li><a href="<?php echo site_url('shopcoffeeequipment'); ?>">Coffee Equipment </a></li>
                            </ul></li>
                        <li><a href="<?php echo site_url('blog'); ?>">Blog</a></li>
                        <li><a href="<?php echo site_url('cousre'); ?>">Cousre</a></li>
                        <li><a href="<?php echo site_url('promotion'); ?>">Promotion</a></li>
                        <li><a href="<?php echo site_url('contact'); ?>">Contact</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
