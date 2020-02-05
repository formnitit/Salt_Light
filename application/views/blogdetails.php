    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-inner">
                        <div class="blog-detail-title">
                            <h2><?php echo $rowshow->blog_name ?></h2>
                            <p>Study <span>- May 19, 2019</span></p>
                        </div>
                        <div class="blog-medium-pic" align="center">
                            <img src="<?php echo base_url('assets/img/uploadimg'); ?>/<?php echo $rowshow->blog_img; ?>" alt="" width="80%">
                        </div>
                        <br><br>
                        <div class="blog-quote">
                            <p><?php echo $rowshow->blog_details ?></p>
                        </div>
                        <div class="tag-share">
                            <div class="details-tag">
                                <ul>
                                    <li><i class="fa fa-tags"></i></li>
                                    <li>STUDY</li>
                                </ul>
                            </div>
                            <div class="blog-share">
                                <span>Share:</span>
                                <div class="social-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-post">
                            <div class="row">
                                <div class="col-lg-5 col-md-6">
                                    <a href="<?php echo site_url('blogdetails'); ?>" class="prev-blog">
                                        <div class="pb-pic">
                                            <i class="ti-arrow-left"></i>
                                            <img src="<?php echo base_url('assets/img/uploadimg'); ?>/<?php echo $rowshow->blog_img; ?>" alt="">
                                        </div>
                                        <div class="pb-text">
                                            <span>Previous Post:</span>
                                            <h5>อราบิก้า (Arabica) กับ โรบัสต้า (Robusta) แตกต่างกันอย่างไร</h5>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-5 offset-lg-2 col-md-6">
                                    <a href="#" class="next-blog">
                                        <div class="nb-pic">
                                            <img src="<?php echo base_url('assets/img/uploadimg'); ?>/<?php echo $rowshow->blog_img; ?>" alt="">
                                            <i class="ti-arrow-right"></i>
                                        </div>
                                        <div class="nb-text">
                                            <span>Next Post:</span>
                                            <h5>วิธีการสตีมนม | How to Steam Milk</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->
