<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fas fa-user"></i> แก้ไขข้อมูลสมาชิก</div>
                    <div class="card-body">

                        <form action="<?php echo site_url('adminmemberedit/editphoto'); ?>" method="post" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="member_name" class="control-label mb-1">ชื่อผู้ใช้</label>
                                <input id="member_name" name="member_name" type="text" class="form-control" value="<?php echo $rowedit->member_name;?>">
                            </div>
                            <div class="form-group">
                                <label for="member_name_lastname" class="control-label mb-1">ชื่อ - นามสกุล</label>
                                <input id="member_name_lastname" name="member_name_lastname" type="text" class="form-control" value="<?php echo $rowedit->member_name_lastname;?>">
                            </div>
                            <div class="form-group">
                                <label for="member_pass" class="control-label mb-1">พาสเวิร์ด</label>
                                <input id="member_pass" name="member_pass" type="text" class="form-control" value="<?php echo $rowedit->member_pass;?>">
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlFile1">อัพโหลดรูปภาพ</label>
                              <input type="file" class="form-control-file btn btn-outline-light text-dark" id="member_img" name="member_img" accept="img/*">
                            </div>
                            <div class="form-group">
                                <label for="member_email" class="control-label mb-1">อีเมล</label>
                                <input id="member_email" name="member_email" type="text" class="form-control" value="<?php echo $rowedit->member_email;?>">
                            </div>
                            <div class="form-group">
                                <label for="member_phonenumber" class="control-label mb-1">เบอร์โทรศัพท์</label>
                                <input id="member_phonenumber" name="member_phonenumber" type="text" class="form-control" value="<?php echo $rowedit->member_phonenumber;?>">
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-12">
                                    <label for="select" class=" form-control-label">ประเภทผู้ใช้</label>
                                </div>
                                <div class="col-12 col-md-12">
                                    <select name="member_type" id="select" class="form-control" value="<?php echo $rowedit->member_type;?>" required>
                                        <option >กรุณาเลือก</option>
                                        <option value="1">แอดมิน</option>
                                        <option value="2">พนักงาน</option>
                                        <option value="3">ผู้ใช้งานสมาชิก</option>
                                    </select>
                                </div>
                            </div>
                              <div align="center">
                                <input type="hidden" name="member_ID" value="<?php echo $rowedit->member_ID;?>">
                                <button type="submit" class="btn btn-outline-success"><i class="fa fa-save">&nbsp;</i>บันทึก</button>

                                <a href="<?php echo site_url('adminmember'); ?>">
                                  <button type="button" class="btn btn-outline-danger"><i class="fa fa-times-circle">&nbsp;</i> ยกเลิก</button>
                                </a>
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
