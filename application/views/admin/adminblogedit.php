<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><i class="fas fa-shopping-cart"></i>  แก้ไขข้อมูลบทความ</div>
                    <div class="card-body">

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
                                 <select name="blog_type_id" id="select" class="form-control" value="" required>
                                   <option >กรุณาเลือก</option>
                                   <option value="101">ให้ความรู้</option>
                                   <option value="102">ข่าวสารใหม่ๆ</option>
                                   <option value="103">เกี่ยวกับร้านเรา</option>
                                 </select>
                             </div>
                         </div>
                         <div class="form-group">
                           <label for="exampleFormControlFile1">อัพโหลดรูปภาพ</label>
                           <input type="file" class="form-control-file btn btn-outline-light text-dark" id="product_img" name="product_img" accept="img/*" >
                         </div>
                         <div align="center">
                           <input type="hidden" name="blog_id" value="<?php echo $rowedit->blog_id;?>">
                           <button type="submit" class="btn btn-outline-success"><i class="fa fa-save">&nbsp;</i>บันทึก</button>

                           <a href="<?php echo site_url('adminblog'); ?>">
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
