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
                      <div class="leave-comment">
                          <form action="#" class="comment-form">
                              <div class="row">
                                      <a href="#"><button type="submit" class="site-btn">Get Code</button>
                                  </div>
                              </div>
                          </form>
                  </div>
              </div>
          </div>
  </section>
  <!-- Blog Details Section End -->
