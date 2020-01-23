<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">เพิ่มข้อมูลคอร์ส</div>
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center title-2">เพิ่มข้อมูลคอร์ส</h3>
                        </div>
                        <hr>
                        <form action="<?php echo site_url('adminaddcourse/adding'); ?>" method="post">
                            <div class="form-group">
                                <label for="course_name" class="control-label mb-1">ชื่อคอร์ส</label>
                                <input id="course_name" name="course_name" type="text" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label for="course_datestart" class="control-label mb-1">วัน/เวลา ลงคอร์ส</label>
                                <input id="course_datestart" name="course_datestart" type="text" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label for="course_dateend" class="control-label mb-1">วัน/เวลา สิ้นสุดคอร์ส</label>
                                <input id="course_dateend" name="course_dateend" type="text" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label for="course_price" class="control-label mb-1">ราคาคอร์ส</label>
                                <input id="course_price" name="course_price" type="number" class="form-control" value="">
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-12">
                                    <label for="select" class=" form-control-label">ทักษะจากคอร์ส</label>
                                </div>
                                <div class="col-12 col-md-12">
                                    <select name="course_skill" id="select" class="form-control" value="<?php echo $rowedit->course_skill;?>" required>
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
                                <button type="submit" class="btn btn-outline-dark"><i class="fa fa-user-plus">&nbsp;</i>เพิ่มข้อมูลคอร์ส</button>
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
