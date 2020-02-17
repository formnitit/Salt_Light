
<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="breadcrumb-text">
                  <a href="<?php echo site_url('welcome'); ?>"><i class="fa fa-home"></i> Home</a>
                  <a href="<?php echo site_url('product'); ?>"><span>Product</span></a>
                  <a href="<?php echo site_url('shop'); ?>"><span>Coffee Drink</span></a>

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

                        <div class="product-large set-bg" data-setbg="<?php echo base_url('assets/img/index'); ?>/Bg2.jpg">
                            <h2>Coffee Drink</h2>
                            <a href="#">Discover More</a>
                        </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 ">
<h2>Product </h2>

                            </div>
                        </div>
                    </div>


                    <div class="product-list">
                        <div class="row">
                          <?php foreach ($query as $row) {?>
                            <div class="col-lg-4 col-sm-6">
                              <form class="" action="" method="post">


                                <div class="product-item">
                                    <div class="pi-pic">

                                        <img src="<?php echo base_url('assets/img/uploadimg'); ?>/<?php echo $row->product_img; ?>" height="250px" width="600px">

                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            <li class="w-icon active"><a href="<?php echo site_url('ShoppingCart/index/').$row->product_id; ?>"><i class="icon_bag_alt"></i></a></li>
                                            <li class="quick-view"><a href="<?php echo site_url('shopsingle/show/').$row->product_id; ?>">+ Quick View</a></li>
                                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                        </ul>

                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name"><?php echo $row->product_type_name; ?></div>
                                        <a href="">
                                            <h5><?php echo $row->product_name; ?></h5>
                                        </a>
                                        <div class="product-price">
                                            ฿<?php echo $row->product_price; ?>.00

                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                                <?php } ;?>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->
