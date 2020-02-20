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
                                <img src="<?php echo base_url('assets/img'); ?>/footter.jpg" width="200px" height="60px">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7" >
                        <div class="advanced-search">

                            <div class="input-group">
                                <input type="text" placeholder="What do you need?">
                                <button type="button"><i class="ti-search"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-right col-md-3">
                      <div class="ht-right">
                        <button type="button" class="site-btn">
                                          <i class="fa fa-star"></i>&nbsp; <?php echo $_SESSION['member_name'] ;?></button>
                          <a href="<?php echo site_url('login/logout'); ?>"><button type="button" class="site-btn">
                                            <i class="fa fa-sign-out"></i>&nbsp; Logout</a></button>
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
                            <li><a href="<?php echo site_url('editprofile/edit1/').$_SESSION ['member_ID'];?>">Edit Profile</a></li>
                            <li><a href="<?php echo site_url('ShoppingCart'); ?>">Shopping Cart</a></li>
                            <li><a href="<?php echo site_url('CheckOut'); ?>">Checkout</a></li>
                            <li><a href="<?php echo site_url('Order'); ?>">Order History</a></li>

                          </ul>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li ><a href="<?php echo site_url('welcome'); ?>">Home</a></li>
                        <li><a href="<?php echo site_url('shop'); ?>">Product</a></li>
                        <li><a href="<?php echo site_url('blog'); ?>">Blog</a></li>
                        <li><a href="<?php echo site_url('Course'); ?>">Cousre</a></li>
                        <li><a href="<?php echo site_url('promotion'); ?>">Promotion</a></li>
                        <li><a href="<?php echo site_url('contact'); ?>">Contact</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
