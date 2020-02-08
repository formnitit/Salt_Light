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
                            <button type="button" class="site-btn" data-toggle="modal" data-target="#myModal">
                              รับโค้ด
                            </button>
                            <!-- The Modal -->
                            <div class="modal" id="myModal">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <!-- Modal Header -->
                                  <div class="modal-header">
                                    <h4 class="modal-title">รับโค้ดส่วนลด</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  </div>
                                  <!-- Modal body -->
                                  <div class="modal-body">
                                    <p><?php echo $rowshow->promotion_code ?></p>
                                  </div>
                                  <!-- Modal footer -->
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                  </div>
              </div>
          </div>
  </section>
  <!-- Blog Details Section End -->
