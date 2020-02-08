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
                        <button type="button" class="btn btn-warning">
                                          <i class="fa fa-star"></i>&nbsp; <?php echo $_SESSION['member_name'] ;?></button>
                          <a href="<?php echo site_url('login/logout'); ?>"><button type="button" class="btn btn-danger">
                                            <i class="fa fa-sign-out"></i>&nbsp; Logout</button>
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
                              <li><a href="<?php echo site_url('ShoppingCart/index1'); ?>">Shopping Cart</a></li>
                              <li><a href="<?php echo site_url('CheckOut/index1'); ?>">Checkout</a></li>
                              <li><a href="<?php echo site_url('Register'); ?>">Register</a></li>
                              <li><a href="<?php echo site_url('Login'); ?>">Login</a></li>
                          </ul>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li ><a href="<?php echo site_url('welcome/index1'); ?>">Home</a></li>
                        <li ><a href="<?php echo site_url('product/index1'); ?>">Product</a>
                        <ul class="dropdown">
                                <li><a href="<?php echo site_url('shop/index1'); ?>">Coffee Drink</a></li>
                                <li><a href="<?php echo site_url('shopcoffeebeans/index1'); ?>">Coffee Beans</a></li>
                                <li><a href="<?php echo site_url('shopcoffeeequipment/index1'); ?>">Coffee Equipment </a></li>
                            </ul></li>
                        <li><a href="<?php echo site_url('blog/index1'); ?>">Blog</a></li>
                        <li><a href="<?php echo site_url('cousre/index1'); ?>">Cousre</a></li>
                        <li><a href="<?php echo site_url('promotion/index1'); ?>">Promotion</a></li>
                        <li><a href="<?php echo site_url('contact/index1'); ?>">Contact</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
