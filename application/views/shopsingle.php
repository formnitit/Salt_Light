  <!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="<?php echo site_url('welcome'); ?>"><i class="fa fa-home"></i> Home</a>
                    <a href="<?php echo site_url('product'); ?>"><span>Product</span></a>
                    <a href="<?php echo site_url('shop'); ?>"><span>Coffee Drink</span></a>
                    <a href="<?php echo site_url('shopsingle'); ?>"><span>Shop Single</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Breadcrumb Section Begin -->

<br>
<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="<?php echo base_url('assets/img/uploadimg'); ?>/<?php echo $rowshow->product_img; ?>" alt="Image" class="img-fluid">
      </div>
      <div class="col-md-6">
        <h2 class="text-black"><?php echo $rowshow->product_name?></h2>
        <b><?php echo $rowshow->product_type_name?></b>
        <p><?php echo $rowshow->product_detail?></p>

        <p><strong class="text-warning h4">฿ <?php echo $rowshow->product_price?>.00</strong></p>

        <div class="mb-5">
          <div class="input-group mb-3" style="max-width: 120px;">
          <div class="input-group-prepend">
            <button class="btn btn-outline-warning js-btn-minus" type="button">&minus;</button>
          </div>
          <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
          <div class="input-group-append">
            <button class="btn btn-outline-warning js-btn-plus" type="button">&plus;</button>
          </div>
        </div>

        </div>
        <a href="#"><button type="submit" class="site-btn">ADD TO CART</button>
          <a href="<?php echo site_url('shop'); ?>"><button type="submit" class="site-btn">BACK </button>
<br>
<br>
<br>
      </div>
    </div>
  </div>
</div>
