<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fa fa-tag">&nbsp;</i>เพิ่มข้อมูลโปรโมชั่น</div>
                    <div class="card-body">
                        <form action="<?php echo site_url('adminaddpromotion/adding'); ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="promotion_name" class="control-label mb-1">ชื่อโปรโมชั่น</label>
                                <input id="promotion_name" name="promotion_name" type="text" class="form-control" value="">
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlFile1">อัพโหลดรูปภาพ</label>
                              <input type="file" class="form-control-file btn btn-outline-light text-dark" id="promotion_img" name="promotion_img" accept="img/*">
                            </div>
                            <div class="form-group">
                                <label for="promotion_code" class="control-label mb-1">รหัสโปรโมชั่น</label>
                                <input id="promotion_code" name="promotion_code" type="text" class="form-control" value="">
                            </div>
                            <div class="form-group">
                              <label for="promotion_datestart" class="control-label mb-1">ด/ว/ป เริ่มโปรโมชั่น</label>
                            </div>
                            <input id="datepicker" name="promotion_datestart"/>
                            <script>
                                $('#datepicker').datepicker({
                                    uiLibrary: 'bootstrap4'
                                });
                            </script>
                            <br>
                            <div class="form-group">
                                <label for="promotion_dateend" class="control-label mb-1">ด/ว/ป สิ้นสุดคอร์ส</label>
                            </div>
                            <input id="datepicker1" name="promotion_dateend"/>
                            <script>
                                $('#datepicker1').datepicker({
                                    uiLibrary: 'bootstrap4'
                                });
                            </script>
                            <br>
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="textarea-input" class=" form-control-label" >รายละเอียดโปรโมชั่น</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea id="promotion_detail" name="promotion_detail" rows="9"  class="form-control" ></textarea>
                                </div>
                            </div>
                                  </div>
                                </div>
                            </div>
                              <div align="center">
                                <button type="submit" class="btn btn-outline-dark"><i class="fa fa-tag">&nbsp;</i>เพิ่มข้อมูลโปรโมชั่น</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
    </div>
</div>