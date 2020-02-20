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
                        <form action="<?php echo site_url('Register/adding'); ?>" method="post" enctype="multipart/form-data">
                          <div class="group-input">
                              <label for="member_email">Username (email)  </label>
                              <input type="text" id="member_email" name="member_email" required>
                          </div>
                          <div class="group-input">
                              <label for="member_pass">Password </label>
                              <input type="password" id="member_pass" name="member_pass" required>
                          </div>
                          <div class="group-input">
                              <label for="member_cpass">Confirm Password</label>
                              <input type="password" id="member_cpass" name="member_cpass" required>
                          </div>
                            <div class="group-input">
                                <label for="member_name">Username</label>
                                <input type="text" id="member_name"  name="member_name" required>
                            </div>
                            <div class="group-input">
                                <label for="member_name_lastname">Name-Lastname</label>
                                <input type="text" id="member_name_lastname" name="member_name_lastname" required>
                            </div>
                            <div class="group-input">
                                <label for="member_phonenumber">Phone</label>
                                <input type="number" id="member_phonenumber" name="member_phonenumber" required>
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlFile1">Upload Profile</label>
                              <input type="file" class="form-control-file btn btn-outline-light text-dark" id="member_img" name="member_img" accept="img/*">
                            </div>
                            <div class="group-input" hidden>
                                <label for="user">0</label>
                                <input type="text" id="member_type" name="member_type" value="user">
                            </div>
                            <button type="submit" class="site-btn register-btn">Register</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->
