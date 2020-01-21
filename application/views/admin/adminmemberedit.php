<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">แก้ไขข้อมูลสมาชิก</div>
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center title-2">แก้ไขข้อมูลสมาชิก</h3>
                        </div>
                        <hr>
                        <form action="<?php echo site_url('adminaddmember/adding'); ?>" method="post">
                            <div class="form-group">
                                <label for="member_name" class="control-label mb-1">ชื่อผู้ใช้</label>
                                <input id="member_name" name="member_name" type="text" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label for="member_name_lastname" class="control-label mb-1">ชื่อ - นามสกุล</label>
                                <input id="member_name_lastname" name="member_name_lastname" type="text" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label for="member_pass" class="control-label mb-1">พาสเวิร์ด</label>
                                <input id="member_pass" name="member_pass" type="text" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label for="member_email" class="control-label mb-1">อีเมล</label>
                                <input id="member_email" name="member_email" type="text" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label for="member_phonenumber" class="control-label mb-1">เบอร์โทรศัพท์</label>
                                <input id="member_phonenumber" name="member_phonenumber" type="text" class="form-control" value="">
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-12">
                                    <label for="select" class=" form-control-label">ประเภทผู้ใช้</label>
                                </div>
                                <div class="col-12 col-md-12">
                                    <select name="member_type" id="select" class="form-control" required>
                                        <option >กรุณาเลือก</option>
                                        <option value="1">แอดมิน</option>
                                        <option value="2">พนักงาน</option>
                                        <option value="3">ผู้ใช้งานสมาชิก</option>
                                    </select>
                                </div>
                            </div>
                              <div align="center">
                                <button type="submit" class="btn btn-outline-dark"><i class="fa fa-user-plus">&nbsp;</i>บันทึกข้อมูลสมาชิก</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
    </div>
</div>
