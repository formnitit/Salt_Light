
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                    <div class="filter-widget">
                        <h4 class="fw-title">Categories</h4>
                        <ul class="filter-catagories">
                            <li><a href="<?php echo site_url('shop/index1'); ?>">Coffee Drink</a></li>
                            <li><a href="<?php echo site_url('shopcoffeebeans/index1'); ?>">Coffee Beans</a></li>
                            <li><a href="<?php echo site_url('shopcoffeeequipment/index1'); ?>">Coffee Equipment</a></li>
                        </ul>
                    </div>

                    <div class="filter-widget">
                        <h4 class="fw-title">Tags</h4>
                        <div class="fw-tags">
                            <a href="#">Towel</a>
                            <a href="#">Shoes</a>
                            <a href="#">Coat</a>
                            <a href="#">Dresses</a>
                            <a href="#">Trousers</a>
                            <a href="#">Men's hats</a>
                            <a href="#">Backpack</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">



                    <div class="product-list">
                        <div class="row">
                          <?php foreach ($query as $row) {?>
                            <div class="col-lg-4 col-sm-6">

                                <div class="product-item">
                                    <div class="pi-pic">

                                        <img src="<?php echo base_url('assets/img/uploadimg'); ?>/<?php echo $row->product_img; ?>" height="250px" width="600px">

                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                            <li class="quick-view"><a href="<?php echo site_url('login/index1'); ?>">+ Quick View</a></li>
                                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                        </ul>

                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name"><?php echo $row->product_type_name; ?></div>
                                        <a href="#">
                                            <h5><?php echo $row->product_name; ?></h5>
                                        </a>
                                        <div class="product-price">
                                            ฿<?php echo $row->product_price; ?>.00

                                        </div>
                                    </div>
                                </div>
                            </div>
                                <?php } ;?>


                        </div>
                    </div>
                    <div class="loading-more">
                        <i class="icon_loading"></i>
                        <a href="#">
                            Loading More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->
