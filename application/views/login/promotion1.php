
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Promotion</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

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
                            <h4>Recent Promotion</h4>
                            <div class="recent-blog">
                              <?php foreach ($query as $row) {?>
                                <a href="<?php echo site_url('promotiondetails/index1'); ?>" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="<?php echo base_url('assets/img/uploadimg'); ?>/<?php echo $row->promotion_img; ?>" >
                                    </div>
                                    <div class="rb-text">
                                        <h6><?php echo $row->promotion_name; ?></h6>
                                        <p><span>- <?php echo $row->promotion_datestart; ?></span></p>
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
                                    <img src="<?php echo base_url('assets/img/uploadimg'); ?>/<?php echo $row->promotion_img; ?>" height="300px" width="600px">
                                </div>
                                <div class="bi-text">
                                    <a href="<?php echo site_url('Promotiondetails/index1/').$row->promotion_id; ?>">
                                        <h4><?php echo $row->promotion_name; ?></h4>
                                    </a>
                                    <p><span>start <?php echo $row->promotion_datestart; ?> - <?php echo $row->promotion_dateend; ?></span></p>

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
