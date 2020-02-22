<div class="table-data__tool-right">
  <a href="<?php echo site_url('Employee/manageshop_employ'); ?>">
    <button class="au-btn-icon btn btn-danger au-btn--small">
        <i class="zmdi zmdi-undo"></i>กลับ</button></a>
</div>
<br>
<form>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">การสั่งซื้อ</div>
                            <div class="card-body">
                                <div class="card-title">
                                    <h3 class="text-center title-2">ข้อมูลผู้สั่งซื้อ</h3>
                                </div>
                                <hr>
                                <form action="" method="post" novalidate="novalidate">


                                  <div class="form-group">
                                      <label for="cc-payment" class="control-label mb-1">สถานะการชำระเงิน</label>
                                      <?php if ($rowshow->ShoppingCart_Payment_status == 1): ?>
                                           <span class="badge badge-warning">กำลังตรวจสอบการชำระเงิน</span>
                                         <?php else: ?>
                                           <span class="badge badge-success">ชำระเงินเรียบร้อยแล้ว</span>
                                      <?php endif; ?>
                                  </div>
                                  <div class="form-group">
                                      <label for="cc-payment" class="control-label mb-1">สถานะการรับออเดอร์</label>
                                      <?php if ($rowshow->ShoppingCart_Order_status == 1): ?>
                                           <span class="badge badge-danger">รอรับออเดอร์</span>
                                         <?php elseif($rowshow->ShoppingCart_Order_status == 2): ?>
                                           <span class="badge badge-primary">กำลังดำเนินการ</span>
                                         <?php else : ?>
                                           <span class="badge badge-success">ออเดอร์สำเร็จ</span>
                                      <?php endif; ?>
                                  </div>

                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">ชื่อ-นามสกุล</label>
                                        <input id="cc-pament" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $rowshow->ShoppingCart_Name; ?>">
                                    </div>
                                    <div class="form-group has-success">
                                        <label for="cc-name" class="control-label mb-1">อีเมล</label>
                                        <input id="cc-name" name="cc-name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                            autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" value="<?php echo $rowshow->ShoppingCart_Email; ?>">
                                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                    </div>
                                    <div class="form-group has-success">
                                        <label for="cc-name" class="control-label mb-1">เบอร์โทรศัพท์</label>
                                        <input id="cc-name" name="cc-name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                            autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" value="<?php echo $rowshow->ShoppingCart_Phone; ?>">
                                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                    </div>

                                    <div class="form-group has-success">
                                        <label for="cc-name" class="control-label mb-1">รหัสการสั่งซื้อ</label>
                                        <input id="cc-name" name="cc-name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                            autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" value="<?php echo $rowshow->ShoppingCart_id; ?>">
                                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                    </div>
                                    <div class="form-group has-success">
                                        <label for="cc-name" class="control-label mb-1">รหัสสินค้า</label>
                                        <input id="cc-name" name="cc-name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                            autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" value="<?php echo $rowshow->product_id; ?>">
                                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                    </div>
                                    <div class="form-group has-success">
                                        <label for="cc-name" class="control-label mb-1">รหัสสินค้า</label>
                                        <input id="cc-name" name="cc-name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                            autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" value="<?php echo $rowshow->ShoppingCart_date; ?>">
                                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                    </div>
                                    <div class="form-group has-success">
                                        <label for="cc-name" class="control-label mb-1">จำนวนการสั่งซื้อ</label>
                                        <input id="cc-name" name="cc-name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                            autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" value="<?php echo $rowshow->ShoppingCart_Quantity; ?>">
                                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                    </div>
                                    <div class="form-group has-success">
                                        <label for="cc-name" class="control-label mb-1">ราคาการสั่งซื้อ</label>
                                        <input id="cc-name" name="cc-name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                            autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" value="฿<?php echo $rowshow->ShoppingCart_pricec; ?>.00">
                                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

  <div class="form-group col-lg-6">

    <img src="<?php echo base_url('assets/img/Slip'); ?>/<?php echo $rowshow->ShoppingCart_slip; ?>" height="450px" width="600px">
  </div>
  </div>

</form>
