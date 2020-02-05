    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Register</span>
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
                        <h2>Register</h2>
                        <form action="<?php echo site_url('Register/adding'); ?>" method="post">
                          <div class="group-input">
                              <label for="member_email">อีเมล </label>
                              <input type="text" id="member_email" name="member_email" required>
                          </div>
                          <div class="group-input">
                              <label for="member_pass">พาสเวิร์ด</label>
                              <input type="text" id="member_pass" name="member_pass" required>
                          </div>
                            <div class="group-input">
                                <label for="member_name">ชื่อผู้ใช้</label>
                                <input type="text" id="member_name"  name="member_name" required>
                            </div>
                            <div class="group-input">
                                <label for="member_name_lastname">ชื่อ - นามสกุล</label>
                                <input type="text" id="member_name_lastname" name="member_name_lastname" required>
                            </div>
                            <div class="group-input">
                                <label for="member_phonenumber">เบอร์โทรศัพท์</label>
                                <input type="number" id="member_phonenumber" name="member_phonenumber" required>
                            </div>
                            <div class="group-input" hidden>
                                <label for="user">0</label>
                                <input type="text" id="member_type" name="member_type" value="user">
                            </div>
                            <button type="submit" class="site-btn register-btn">สมัคสมาชิก</button>
                        </form>
                        <div class="switch-login">
                            <a href="<?php echo site_url('Login'); ?>">Or Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->
