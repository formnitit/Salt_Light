<div class="table-data__tool-right">
  <a href="<?php echo site_url('adminShoppingCart'); ?>">
    <button class="au-btn-icon btn btn-danger au-btn--small">
        <i class="zmdi zmdi-undo"></i>กลับ</button></a>
</div>
<br>
<form action="<?php echo site_url('AdminShoppingCart/edit_success') ;?>" method="post">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">การสั่งซื้อ</div>
                            <div class="card-body">
                                <div class="card-title">
                                    <h3 class="text-center title-2">ข้อมูลผู้สั่งซื้อ</h3>
                                </div>
                                <hr>
                                  <div class="row form-group">
                                      <div class="col col-md-3">
                                          <label for="select" class=" form-control-label">สถานะการชำระเงิน</label>
                                      </div>
                                      <div class="col-12 col-md-9">
                                          <select name="Success1" id="select" class="form-control">
                                              <option >กรุณาเลือก</option>
                                              <option value="1">กำลังตรวจสอบการชำระเงิน</option>
                                              <option value="2">ชำระเงินเรียบร้อยแล้ว</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="row form-group">
                                      <div class="col col-md-3">
                                          <label for="select" class=" form-control-label">สถานะการรับออเดอร์</label>
                                      </div>
                                      <div class="col-12 col-md-9">
                                          <select name="Success2" id="select" class="form-control">
                                              <option >กรุณาเลือก</option>
                                              <option value="1">รอรับออเดอร์</option>
                                              <option value="2">กำลังดำเนินการ</option>
                                              <option value="3">ออเดอร์สำเร็จ</option>
                                          </select>
                                      </div>
                                    <?php foreach ($query as $row) { ?>
                                      <input type="text" name="ShoppingCart_id" value="<?php echo $row->ShoppingCart_id; ?>"  hidden>
                                    <?php } ?>
                                  </div>
                                  <button class="au-btn-icon btn btn-success au-btn--small" type="submit">
                                      <i class="fa fa-save"></i>บันทึก</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-lg-6">

                      <img src="<?php echo base_url('assets/img/Slip'); ?>/<?php echo $rowshow->ShoppingCart_slip; ?>" height="450px" width="600px">
                    </div>
  </div>

</form>
