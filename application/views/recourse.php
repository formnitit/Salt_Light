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
                    <h2>Register Course</h2>
                    <form action="<?php echo site_url('Recourse/adding'); ?>" method="post">
                        <div class="group-input">
                            <label for="recourse_name">Name</label>
                            <input type="text" id="recourse_name" name="recourse_name" required>
                        </div>
                        <div class="group-input">
                            <label for="recourse_surname">Surname</label>
                            <input type="text" id="recourse_surname" name="recourse_surname" required>
                        </div>
                        <div class="group-input">
                            <label for="recourse_address">Address</label>
                            <input type="text" id="recourse_address" name="recourse_address" required>
                        </div>
                        <div class="group-input">
                            <label for="recourse_email">Email</label>
                            <input type="text" id="recourse_email" name="recourse_email" required>
                        </div>
                        <div class="group-input">
                            <label for="recourse_phone">Phone</label>
                            <input type="number" id="recourse_phone" name="recourse_phone" required >
                        </div>
                        <div class="group-input">
                            <input type="text" id="recourse_phone" name="course_id"  value="<?php echo $rowshow->course_id;?>" hidden>
                        </div>
                        <button type="submit" class="site-btn register-btn">Register Course</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register Form Section End -->
