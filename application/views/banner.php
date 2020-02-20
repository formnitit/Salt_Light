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
                        <a href="<?php echo site_url('login/index1'); ?>"><button type="button" class="site-btn"><i class="fa fa-user"></i>&nbsp; Login</button>
                          <a href="<?php echo site_url('register'); ?>"><button type="button" class="site-btn"><i class="fa fa-registered"></i>&nbsp; Register</button>
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
                              <li><a href="<?php echo site_url('login/index1'); ?>">Login</a></li>
                              <li><a href="<?php echo site_url('register'); ?>">Register</a></li>

                          </ul>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li ><a href="<?php echo site_url('welcome/index1'); ?>">Home</a></li>
                        <li ><a href="<?php echo site_url('shop/index1'); ?>">Product</a>
                        <li><a href="<?php echo site_url('blog/index1'); ?>">Blog</a></li>
                        <li><a href="<?php echo site_url('course/index1'); ?>">Course</a></li>
                        <li><a href="<?php echo site_url('promotion/index1'); ?>">Promotion</a></li>
                        <li><a href="<?php echo site_url('contact/index1'); ?>">Contact</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
