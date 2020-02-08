<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="<?php echo site_url('welcome'); ?>"><i class="fa fa-home"></i> Home</a>
                    <a href="<?php echo site_url('product'); ?>"><span>Product</span></a>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Section Begin -->
<div class="banner-section spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="<?php echo base_url('assets/img/index'); ?>/Coffee Drink.jpg" alt="">
                    <div class="inner-text">
                        <a href="<?php echo site_url('shop'); ?>"><h4>Coffee Drink</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="<?php echo base_url('assets/img/index'); ?>/Coffee Beans.jpg" alt="">
                    <div class="inner-text">
                        <a href="<?php echo site_url('shopcoffeebeans'); ?>"><h4>Coffee Beans</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="<?php echo base_url('assets/img/index'); ?>/Coffee Equipment.jpg" alt="">
                    <div class="inner-text">
                        <a href="<?php echo site_url('shopcoffeeequipment'); ?>"><h4>Coffee Equipment</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Section End -->

<!-- Women Banner Section Begin -->
<section class="women-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="product-large set-bg" data-setbg="<?php echo base_url('assets/img/index'); ?>/Bg2.jpg">
                    <h2>Coffee Drink</h2>
                    <a href="#">Discover More</a>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-1">
                <div class="filter-control">
                    <ul>
                        <li class="active">Coffee Drink</li>
                        <li>Coffee Beans</li>
                        <li>Coffee Equipment</li>
                    </ul>
                </div>

                <div class="product-slider owl-carousel">
                  <?php foreach ($query as $row) {?>
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="<?php echo base_url('assets/img/uploadimg'); ?>/<?php echo $row->product_img; ?>" height="250px" width="600px">

                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="<?php echo site_url('shopsingle/show/').$row->product_id; ?>">+ Quick View</a></li>
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
                    <?php } ;?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Women Banner Section End -->


<!-- Man Banner Section Begin -->
<section class="man-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="filter-control">
                    <ul>
                      <li class="active">Coffee Beans</li>
                      <li>Coffee Drink</li>
                      <li>Coffee Equipment</li>
                    </ul>
                </div>
                <div class="product-slider owl-carousel">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="<?php echo base_url('assets/img/products'); ?>/coffee beans1.jpg" alt="">
                            <div class="sale">Sale</div>
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="#">+ Quick View</a></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">Coffee Beans</div>
                            <a href="#">
                                <h5>A4 Medium Roast</h5>
                            </a>
                            <div class="product-price">
                                ฿100.00
                                <span>฿130.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="<?php echo base_url('assets/img/products'); ?>/coffee beans2.jpg" alt="">
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="#">+ Quick View</a></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">Coffee Beans</div>
                            <a href="#">
                                <h5>A4.5 Medium-Dark Roast</h5>
                            </a>
                            <div class="product-price">
                                ฿130.00
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="<?php echo base_url('assets/img/products'); ?>/coffee beans3.jpg" alt="">
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="#">+ Quick View</a></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">Coffee Beans</div>
                            <a href="#">
                                <h5>A5 Dark Roast</h5>
                            </a>
                            <div class="product-price">
                                ฿130.00
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="<?php echo base_url('assets/img/products'); ?>/coffee beans4.jpg" alt="">
                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="#">+ Quick View</a></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name">Coffee Beans</div>
                            <a href="#">
                                <h5>A3 Light Roast</h5>
                            </a>
                            <div class="product-price">
                                ฿130.00
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="product-large set-bg m-large" data-setbg="<?php echo base_url('assets/img/index'); ?>/Bg5.jpg">
                    <h2>Coffee Beans</h2>
                    <a href="#">Discover More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Man Banner Section End -->

<!-- Women Banner Section Begin -->
<section class="women-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="product-large set-bg" data-setbg="<?php echo base_url('assets/img/index'); ?>/Bg7.jpg">
                    <h2>Coffee Equipment</h2>
                    <a href="#">Discover More</a>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-1">
                <div class="filter-control">
                    <ul>
                        <li class="active">Coffee Drink</li>
                        <li>Coffee Beans</li>
                        <li>Coffee Equipment</li>
                    </ul>
                </div>

                <div class="product-slider owl-carousel">
                  <?php foreach ($query as $row) {?>
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="<?php echo base_url('assets/img/uploadimg'); ?>/<?php echo $row->product_img; ?>" height="250px" width="600px">

                            <div class="icon">
                                <i class="icon_heart_alt"></i>
                            </div>
                            <ul>
                                <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                <li class="quick-view"><a href="#">+ Quick View</a></li>
                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                        </div>
                        <div class="pi-text">
                            <div class="catagory-name"><?php echo $row->product_type_id; ?></div>
                            <a href="#">
                                <h5><?php echo $row->product_name; ?></h5>
                            </a>
                            <div class="product-price">
                              ฿<?php echo $row->product_price; ?>.00

                            </div>
                        </div>
                    </div>
                    <?php } ;?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Women Banner Section End -->
