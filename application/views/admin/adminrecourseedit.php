<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fa fa-coffee">&nbsp;</i>แก้ไขข้อมูลผู้สมัครคอร์ส</div>
                    <div class="card-body">
                        <form action="<?php echo site_url('adminrecourseedit/edit'); ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="recourse_name" class="control-label mb-1">ชื่อผู้สมัคร</label>
                                <input id="recourse_name" name="recourse_name" type="text" class="form-control" value="<?php echo $rowedit->recourse_name;?>">
                            </div>
                            <div class="form-group">
                                <label for="recourse_surname" class="control-label mb-1">นามสกุล</label>
                                <input id="recourse_surname" name="recourse_surname" type="text" class="form-control" value="<?php echo $rowedit->recourse_surname;?>">
                            </div>
                            <div class="form-group">
                                <label for="recourse_address" class="control-label mb-1">ที่อยู่</label>
                                <input id="recourse_address" name="recourse_address" type="text" class="form-control" value="<?php echo $rowedit->recourse_address;?>">
                            </div>
                            <div class="form-group">
                                <label for="recourse_email" class="control-label mb-1">อีเมล</label>
                                <input id="recourse_email" name="recourse_email" type="text" class="form-control" value="<?php echo $rowedit->recourse_email;?>">
                            </div>
                            <div class="form-group">
                                <label for="recourse_phone" class="control-label mb-1">เบอร์โทรศัพท์</label>
                                <input id="recourse_phone" name="recourse_phone" type="text" class="form-control" value="<?php echo $rowedit->recourse_phone;?>">
                            </div>
                            <div class="form-group">
                                <label for="course_name" class="control-label mb-1">คอร์สที่สมัคร</label>
                                <input id="course_name" name="course_name" type="text" class="form-control" value="<?php echo $rowedit->course_name;?>">
                            </div>
                              <div align="center">
                                <input type="hidden" name="recourse_id" value="<?php echo $rowedit->recourse_id;?>">
                                <button type="submit" class="btn btn-outline-success"><i class="fa fa-save">&nbsp;</i>แก้ไขข้อมูลคอร์ส</button>
                                <a href="<?php echo site_url('adminrecourse'); ?>">
                                  <button type="button" class="btn btn-outline-danger"><i class="fa fa-times-circle">&nbsp;</i> ยกเลิก</button>
                                </a>
                            </div>
                        </form>
                </div>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-md-12">
            </div>
        </div> -->
    </div>
</div>
