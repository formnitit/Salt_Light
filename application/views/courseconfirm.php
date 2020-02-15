<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                    <span>Register Cousre</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Form Section Begin -->

<!-- Register Section Begin -->
<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="register-form">
                    <h2>Salt&Light</h2>
                    <h3>ขอแจ้งผลการสมัครคอร์ส</h3>
                    <h3>คุณได้ทำการสมัครคอร์สเรียบร้อยแล้ว</h3>
                    <br><br>
                    <img src="<?php echo base_url('assets/img/uploadimg') ?>/<?php echo $rowshow->course_img ?>" alt="" class="img-rounded center-block" width="80%">
                    <br><br>
                    <!-- <div class="col-lg-6 offset-lg-3" align="center"> -->
                        <p>ชื่อคอร์สที่สมัคร : <?php echo $rowshow->course_name ?></p>
                        <p>วันเวลาเริ่ม-สิ้นสุดคอร์ส :<?php echo $rowshow->course_datestart ?> - <?php echo $rowshow->course_dateend ?></p>
                        <p>ราคาคอร์ส :<?php echo $rowshow->course_price ?></p>
                        <p>ทักษะที่จะได้จากคอร์ส : <?php echo $rowshow->course_skill ?></p>
                        <h3>ขอบคุณที่ใช้บริการในการสมัครคอร์ส</h3>
                        <h3 style="color:red">หมายเหตุ:ชำระเงินในวันที่เรียนคอร์สครั้งแรก</h3>
                        <br>
                    <!-- </div> -->
                    <div class="row">
                      <a class="site-btn" type="submit" href="<?php echo site_url('course') ?>">ยืนยัน</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register Form Section End -->
