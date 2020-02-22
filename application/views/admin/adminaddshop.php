<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fas fa-shopping-cart"></i>  เพิ่มข้อมูลสินค้า</div>
                    <div class="card-body">

                        <form action="<?php echo site_url('adminaddshop/adding'); ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="product_id" class="control-label mb-1">รหัสสินค้า</label>
                                <input id="product_id" name="product_id" type="text" class="form-control" value="">
                            </div>

                                <!-- <div class="form-group">
                                  <label>อัพโหลดรูปภาพ</label>
                                  <div class="custom-file">
                                    <input type="file" name="product_img" multiple class="custom-file-input" id="product_img" accept="img/*">
                                    <label class="custom-file-label" for="customFile"></label>
                                  </div>
                                </div> -->


                                  <div class="form-group">
                                    <label for="exampleFormControlFile1">อัพโหลดรูปภาพ</label>
                                    <input type="file" class="form-control-file btn btn-outline-light text-dark" id="product_img" name="product_img" accept="img/*">
                                  </div>

                            <div class="form-group">
                                <label for="product_name" class="control-label mb-1">ชื่อสินค้า</label>
                                <input id="product_name" name="product_name" type="text" class="form-control" value="">
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-12">
                                    <label for="select" class=" form-control-label">หมวดหมู่สินค้า</label>
                                </div>
                                <div class="col-12 col-md-12">
                                    <select name="product_type_id" id="select" class="form-control" value="" required>
                                        <option >กรุณาเลือก</option>
                                        <option value="1001">Hot</option>
                                        <option value="1002">Cool</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="product_price" class="control-label mb-1">ราคาสินค้า</label>
                                <input id="product_price" name="product_price" type="text" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label for="product_qty" class="control-label mb-1">จำนวนสินค้า</label>
                                <input id="product_qty" name="product_qty" type="text" class="form-control" value="">
                            </div>


                              <div class="col-lg-12">
                                <div class="card">
                                  <div class="card-header">
                              <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="textarea-input" class=" form-control-label" >รายละเอียดสินค้า</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea id="product_detail" name="product_detail" rows="9"  class="form-control" ></textarea>
                                    <script>
                                        ClassicEditor
                                            .create( document.querySelector( '#product_detail' ) )
                                            .catch( error => {
                                                console.error( error );
                                            } );
                                    </script>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>

                    <div align="center">
                      <button type="submit" class="btn btn-outline-success"><i class="fa fa-plus-circle">&nbsp;</i> เพิ่มสินค้า</button>

                      <a href="<?php echo site_url('adminshop'); ?>">
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
