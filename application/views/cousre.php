<!-- Breadcrumb Section Begin -->
  <div class="breacrumb-section">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="breadcrumb-text">
                      <a href="#"><i class="fa fa-home"></i> Home</a>
                      <span>Cousre</span>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Breadcrumb Section Begin -->

<!-- Deal Of The Week Section Begin-->
<section class="deal-of-week set-bg spad" data-setbg="<?php echo base_url('assets/img/index'); ?>/Barista.jpg">
    <div class="container">
        <div class="col-lg-6 text-center">
            <div class="section-title">
                <h2>Cousre Barista</h2>
                <p>หลักสูตร Basic Barista Course 1 วัน : เน้นทฤษฎี และการปฏิบัติด้วยเครื่อง<br /> Espresso Machine และการปฏิบัติด้วยเครื่อง Espresso Machine </p>
                <div class="product-price">
                    ฿2,500.00
                    <span>/ Cousre</span>
                </div>
            </div>
            <div class="countdown-timer" id="countdown">
                <div class="cd-item">
                    <span>56</span>
                    <p>Days</p>
                </div>
                <div class="cd-item">
                    <span>12</span>
                    <p>Hrs</p>
                </div>
                <div class="cd-item">
                    <span>40</span>
                    <p>Mins</p>
                </div>
                <div class="cd-item">
                    <span>52</span>
                    <p>Secs</p>
                </div>
            </div>
            <!-- <a href="<?php echo site_url('cousre'); ?>">Go To Lesson</a> -->
        </div>
    </div>
</section>
<!-- Deal Of The Week Section End -->

    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1">
                    <div class="blog-sidebar">
                        <div class="search-form">
                            <h4>Search</h4>
                            <form action="#">
                                <input type="text" placeholder="Search . . .  ">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="recent-post">
                            <h4>Barista Course</h4>
                            <div class="recent-blog">
                              <?php foreach ($query as $row) {?>
                                <a href="<?php echo site_url('cousredetails/show/').$row->course_id; ?>" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="<?php echo base_url('assets/img/uploadimg'); ?>/<?php echo $row->course_img; ?>" >
                                    </div>
                                    <div class="rb-text">
                                        <h6><?php echo $row->course_name; ?></h6>
                                        <p><span>- <?php echo $row->course_dateend; ?></span></p>
                                    </div>
                                </a>
                                <?php } ;?>
                            </div>
                        </div>
                        <div class="blog-tags">
                            <h4>Product Tags</h4>
                            <div class="tag-item">
                                <a href="#">Coffee Drink</a>
                                <a href="#">Coffee Beans</a>
                                <a href="#">Coffee Equipment</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="row">

                      <?php foreach ($query as $row) {?>

                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="<?php echo base_url('assets/img/uploadimg'); ?>/<?php echo $row->course_img; ?>" height="250px" width="600px" alt="">
                                </div>
                                <div class="bi-text">
                                      <a href="<?php echo site_url('cousredetails/show/').$row->course_id; ?>">
                                          <h4><?php echo $row->course_name; ?></h4>
                                      </a>
                                    <p><span>Start <?php echo $row->course_datestart; ?> - <?php echo $row->course_dateend; ?></span></p>

                                </div>
                            </div>
                        </div>
                        <?php } ;?>
                        <!-- <div class="col-lg-12">
                            <div class="loading-more">
                                <i class="icon_loading"></i>
                                <a href="#">
                                    Loading More
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
