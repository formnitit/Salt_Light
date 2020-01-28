<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">เพิ่มข้อมูลโปรโมชั่น</div>
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center title-2">เพิ่มข้อมูลโปรโมชั่น</h3>
                        </div>
                        <hr>
                        <form action="<?php echo site_url('adminaddpromotion/adding'); ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="promotion_name" class="control-label mb-1">ชื่อโปรโมชั่น</label>
                                <input id="promotion_name" name="promotion_name" type="text" class="form-control" value="">
                            </div>
                            <div class="container mt-5">
                              <h5 class="text-center">อัพโหลดรูปภาพ</h5>
                              <div class="col-sm-12 col-lg-4 mr-auto ml-auto border p-4">
                                  <div class="form-group">
                                    <label><strong>Upload Files</strong></label>
                                    <div class="custom-file">
                                      <input type="file" name="promotion_img" multiple class="custom-file-input" id="promotion_img" accept="img/*">
                                      <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                  </div>
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
                                <button type="submit" class="btn btn-outline-dark"><i class="fa fa-user-plus">&nbsp;</i>เพิ่มข้อมูลโปรโมชั่น</button>
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
