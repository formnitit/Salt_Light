<!-- Breadcrumb Section Begin -->
  <div class="breacrumb-section">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="breadcrumb-text">
                      <a href="<?php echo site_url('welcome'); ?>"><i class="fa fa-home"></i> Home</a>
                      <a href="<?php echo site_url('promotion'); ?>"><span>Promotion</span></a>
                      <span>Promotiondetails</span>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Breadcrumb Section Begin -->

<!-- Blog Details Section Begin -->
  <section class="blog-details spad">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="blog-details-inner">
                      <div class="blog-detail-title">
                          <h2><?php echo $rowshow->promotion_name ?></h2>
                      </div>
                      <div class="blog-medium-pic" align="center">
                          <img src="<?php echo base_url('assets/img/uploadimg'); ?>/<?php echo $rowshow->promotion_img; ?>" alt="" width="60%">
                      </div>
                      <br>
                      <div class="blog-quote" align="center">
                          <p>วันเริ่ม - สิ้นสุด <?php echo $rowshow->promotion_datestart ?> - <?php echo $rowshow->promotion_dateend ?> </p>
                      </div>
                      <div class="">
                          <p><?php echo $rowshow->promotion_detail ?></p>
                      </div>
                          <div class="container">
                            <!-- Button to Open the Modal -->
                            <a href="<?php echo site_url('login/index1'); ?>"><button type="button" class="site-btn" data-toggle="modal" data-target="#myModal">
                              รับโค้ด
                            </button>
                            <!-- The Modal -->

                          </div>
                  </div>
              </div>
          </div>
  </section>
  <!-- Blog Details Section End -->
