<!-- Breadcrumb Section Begin -->
  <div class="breacrumb-section">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="breadcrumb-text">
                      <a href="<?php echo site_url('welcome'); ?>"><i class="fa fa-home"></i> Home</a>
                      <a href="<?php echo site_url('cousre'); ?>"><span>Cousre</span></a>
                      <span>Cousredetails</span>
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
                          <h2><?php echo $rowshow->course_name ?></h2>
                          <h2>ราคาคอร์ส <?php echo $rowshow->course_price ?></h2>
                      </div>
                      <div class="blog-medium-pic" align="center">
                          <img src="<?php echo base_url('assets/img/uploadimg'); ?>/<?php echo $rowshow->course_img; ?>" alt="" width="60%">
                      </div>
                      <br>
                      <div class="blog-quote" align="center">
                          <p>วันเริ่ม - สิ้นสุด <?php echo $rowshow->course_datestart ?> - <?php echo $rowshow->course_dateend ?> </p>
                          <p>สกิลที่จะได้รับ <?php echo $rowshow->course_skill ?></p>
                      </div>
                      <div class="">
                          <p><?php echo $rowshow->course_detail ?></p>
                      </div>
                      <div class="site-btn">
                          <form action="#" class="comment-form">
                              <div class="row">
                                      <!-- <a href=""><button type="submit" class="site-btn">Register Cousre</button></a> -->
                                      <a href="<?php echo site_url('recourse/show/').$rowshow->course_id; ?>">Register Course</a>
                              </div>
                          </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

  </section>
  <!-- Blog Details Section End -->
