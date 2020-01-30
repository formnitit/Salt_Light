<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">เพิ่มข้อมูลบทความ</div>
                    <div class="card-body">
                        <hr>
                        <form action="<?php echo site_url('adminaddblog/adding'); ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="blog_name" class="control-label mb-1">ชื่อบทความ</label>
                                <input id="blog_name" name="blog_name" type="text" class="form-control" value="">
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-12">
                                    <label for="select" class=" form-control-label">หมวดหมู่บทความ</label>
                                </div>
                                <div class="col-12 col-md-12">
                                    <!-- <select name="blog_type_name" id="select" class="form-control" required>
                                        <option value=""></option>
                                    </select> -->
                                    <div class="container mt-5">
                                    <h5 class="text-center">อัพโหลดรูปภาพ</h5>
                                    <div class="col-sm-12 col-lg-4 mr-auto ml-auto border p-4">
                                        <div class="form-group">
                                          <label><strong>Upload Files</strong></label>
                                          <div class="custom-file">
                                            <input type="file" name="blog_img" multiple class="custom-file-input" id="blog_img" accept="img/*">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                          </div>
                                        </div>
                                    </div>
                                    </div>
                                      </form>
                                </div>
                            </div>
                            <div align="center">
                              <button type="submit" class="btn btn-outline-dark"><i class="fa fa-user-plus">&nbsp;</i>เพิ่มข้อมูลบทความ</button>
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
