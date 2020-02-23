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
                          <!-- <div class="container">
                            <button type="button" class="site-btn" data-toggle="modal" data-target="#myModal">
                              รับโค้ด
                            </button>
                            <div class="modal" id="myModal">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h4 class="modal-title">รับโค้ดส่วนลด</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  </div>
                                  <div class="modal-body">
                                    <input type="text" value="<?php echo $rowshow->promotion_code ?>" id="myInput">
                                  </div>
                                  <div class="modal-footer">
                                    <button class="btn btn-success" onclick="myFunction()">คัดลอก</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div> -->
                  </div>
              </div>
          </div>
  </section>
  <!-- Blog Details Section End -->
