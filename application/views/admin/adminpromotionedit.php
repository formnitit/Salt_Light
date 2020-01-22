<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">แก้ไขข้อมูลโปรโมชั่น</div>
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center title-2">แก้ไขข้อมูลโปรโมชั่น</h3>
                        </div>
                        <hr>
                        <form action="<?php echo site_url('adminpromotionedit/edit'); ?>" method="post">
                            <div class="form-group">
                                <label for="promotion_name" class="control-label mb-1">ชื่อโปรโมชั่น</label>
                                <input id="promotion_name" name="promotion_name" type="text" class="form-control" value="<?php echo $rowedit->promotion_name;?>">
                            </div>
                            <div class="form-group">
                                <label for="promotion_detail" class="control-label mb-1">รายละเอียดโปรโมชั่น</label>
                                <input id="promotion_detail" name="promotion_detail" type="text" class="form-control" value="<?php echo $rowedit->promotion_detail;?>">
                            </div>
                            <div class="form-group">
                                <label for="promotion_code" class="control-label mb-1">รหัสโปรโมชั่น</label>
                                <input id="promotion_code" name="promotion_code" type="text" class="form-control" value="<?php echo $rowedit->promotion_code;?>">
                            </div>
                            <div class="form-group">
                                <label for="promotion_datestart" class="control-label mb-1">วันเริ่มโปรโมชั่น</label>
                                <input id="promotion_datestart" name="promotion_datestart" type="text" class="form-control" value="<?php echo $rowedit->promotion_datestart;?>">
                            </div>
                            <div class="form-group">
                                <label for="promotion_dateend" class="control-label mb-1">วันสิ้นสุดโปรโมชั่น</label>
                                <input id="promotion_dateend" name="promotion_dateend" type="text" class="form-control" value="<?php echo $rowedit->promotion_dateend;?>">
                            </div>
                              <div align="center">
                                <input type="hidden" name="promotion_id" value="<?php echo $rowedit->promotion_id;?>">
                                <button type="submit" class="btn btn-outline-dark"><i class="fa fa-user-plus">&nbsp;</i>แก้ไขข้อมูลโปรโมชั่น</button>
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