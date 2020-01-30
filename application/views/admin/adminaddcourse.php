<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fa fa-coffee">&nbsp;</i>เพิ่มข้อมูลคอร์ส</div>
                    <div class="card-body">
                        <form action="<?php echo site_url('adminaddcourse/adding'); ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="course_name" class="control-label mb-1">ชื่อคอร์ส</label>
                                <input id="course_name" name="course_name" type="text" class="form-control" value="">
                            </div>
                              <label>อัพโหลดรูปภาพ</label>
                                  <div class="form-group">
                                    <div class="custom-file">
                                      <input type="file" name="course_img" multiple class="custom-file-input" id="course_img" accept="img/*">
                                      <label class="custom-file-label" for="customFile">เลือกรูปภาพ</label>
                                    </div>
                                  </div>
                            <div class="form-group">
                              <label for="course_datestart" class="control-label mb-1">ด/ว/ป เริ่มคอร์ส</label>
                            </div>
                            <input id="datepicker" name="course_datestart"/>
                            <script>
                                $('#datepicker').datepicker({
                                    uiLibrary: 'bootstrap4'
                                });
                            </script>
                            <br>
                            <div class="form-group">
                                <label for="course_dateend" class="control-label mb-1">ด/ว/ป สิ้นสุดคอร์ส</label>
                            </div>
                            <input id="datepicker1" name="course_dateend"/>
                            <script>
                                $('#datepicker1').datepicker({
                                    uiLibrary: 'bootstrap4'
                                });
                            </script>
                            <div class="form-group">
                                <label for="course_price" class="control-label mb-1">ราคาคอร์ส</label>
                                <input id="course_price" name="course_price" type="number" class="form-control" value="">
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-12">
                                    <label for="select" class=" form-control-label">ทักษะจากคอร์ส</label>
                                </div>
                                <div class="col-12 col-md-12">
                                    <select name="course_skill" id="select" class="form-control" value="" required>
                                        <option >กรุณาเลือก</option>
                                        <option value="บาริสต้าพื้นฐาน">บาริสต้าพื้นฐาน</option>
                                        <option value="บาริสต้าขั้นสูง">บาริสต้าขั้นสูง</option>
                                        <option value="ลาเต้อาทต">ลาเต้อาทต์</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="textarea-input" class=" form-control-label" >รายระเอียดคอร์ส</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea id="course_detail" name="course_detail" rows="9"  class="form-control" ></textarea>
                                </div>
                            </div>
                                  </div>
                                </div>
                            </div>
                              <div align="center">
                                <button type="submit" class="btn btn-outline-dark"><i class="fa fa-plus">&nbsp;</i>เพิ่มข้อมูลคอร์ส</button>
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
