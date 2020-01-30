<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">แก้ไขข้อมูลบทความ</div>
                    <div class="card-body">
                        <hr>
                        <form action="<?php echo site_url('adminblogedit/edit'); ?>" method="post">
                          <div class="form-group">
                              <label for="blog_name" class="control-label mb-1">ชื่อบทความ</label>
                              <input id="blog_name" name="blog_name" type="text" class="form-control" value="">
                          </div>
                          <div class="row form-group">
                              <div class="col col-md-12">
                                  <label for="select" class=" form-control-label">หมวดหมู่บทความ</label>
                              </div>
                              <div class="col-12 col-md-12">
                                  <select name="blog_type_name" id="select" class="form-control" required>
                                      <option value="<?php echo $query->blog_type_name; ?>"></option>
                                  </select>
                                  <div class="form-group">
                                    <label><strong>Upload Files</strong></label>
                                    <div class="custom-file">
                                      <input type="file" name="blog_img" multiple class="custom-file-input" id="blog_img" accept="img/*" value="<?php echo $rowedit->blog_img;?>">
                                      <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                  </div>
                                  </form>
                            </div>
                            <div align="center">
                              <input type="hidden" name="blog_id" value="<?php echo $rowedit->blog_id;?>">
                              <button type="submit" class="btn btn-outline-dark"><i class="fa fa-user-plus">&nbsp;</i>บันทึก</button>
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
