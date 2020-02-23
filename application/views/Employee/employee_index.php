<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">จัดการระบบ</h2>

        </div>
    </div>
</div>

<br>
<div class="row m-t-25">
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c1">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                  <a href="<?php echo site_url('adminmember'); ?>">
                    <div class="icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="text">

                        <span>สมาชิก</span>
                    </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c2">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                      <a href="<?php echo site_url('adminshop'); ?>">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="text">
                        <span>สินค้า</span>
                    </div>
                  </a>
                </div>

            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c3">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                      <a href="<?php echo site_url('adminblog'); ?>">
                        <i class="fas fa-file-text"></i>
                    </div>
                    <div class="text">
                        <span>บทความ</span>
                    </div>
                  </a>
                </div>

            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c4">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <a href="<?php echo site_url('admincontact'); ?>">
                        <i class="fas fa-comments"></i>
                    </div>
                    <div class="text">
                        <span>ติดต่อ</span>
                    </div>
                  </a>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <!-- USER DATA-->
        <div class="user-data m-b-30">
            <h3 class="title-3 m-b-30">
                <i class="zmdi zmdi-account-calendar"></i>สมาชิก</h3>
            <div class="filters m-b-45">


            </div>
            <div class="table-responsive table-data">
                <table class="table">
                    <thead>
                        <tr>
                          <td>ชื่อผู้ใช้</td>
                          <td>ชื่อ - นามสกุล</td>
                          <td>รูปภาพผู้ใช้งาน</td>
                          <td>อีเมล</td>
                          <td>เบอร์โทรศัพท์</td>
                          <td>ประเภทผู้ใช้</td>
                        </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($member as $row) {?>
                        <tr>

                            <td><?php echo $row->member_name; ?></td>
                            <td><?php echo $row->member_name_lastname; ?></td>
                            <td><img src="<?php echo base_url('assets/img/uploadimg'); ?>/<?php echo $row->member_img; ?>" width="100px" height="100px"></td>
                            <td><?php echo $row->member_email; ?></td>
                            <td><?php echo $row->member_phonenumber; ?></td>
                            <td>
                                <?php if ($row->member_type == 0): ?>
                                     <span class="role user">Member</span>
                                   <?php elseif($row->member_type == 1): ?>
                                     <span class="role admin">Admin</span>
                                   <?php else : ?>
                                     <span class="role member">Employee</span>
                                <?php endif; ?>
                            </td>

                        </tr>
<?php } ;?>
                    </tbody>
                </table>

        <!-- END USER DATA-->
    </div>
    </div>
  </div>
  </div>



<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">การสั่งซื้อ</h2>

        </div>
    </div>
</div>
            <div class="row">

                <div class="col-lg-12">
                    <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>เลขที่สั่งซื้อ</th>
                                    <th>จำนวน</th>
                                    <th>ราคา</th>
                                    <th class="text-right">ชื่อผู้สั่งซื้อ</th>
                                    <th class="text-right">เพิ่มเติม</th>
                                    <th class="text-right">สถานะการชำระเงิน</th>
                                    <th class="text-right">สถานะการรับออเดอร์</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($cart as $row) {?>
                                <tr>
                                    <td><?php echo $row->ShoppingCart_id; ?></td>
                                    <td><?php echo $row->ShoppingCart_Quantity; ?></td>
                                    <td>฿<?php echo $row->ShoppingCart_total; ?>.00</td>
                                    <td class="text-right"><?php echo $row->ShoppingCart_Name; ?></td>
                                    <td class="text-right">#<?php echo $row->ShoppingCart_Details; ?></td>
                                    <td><?php if ($row->ShoppingCart_Payment_status == 1): ?>
                                         <span class="badge badge-warning">กำลังตรวจสอบการชำระเงิน</span>
                                       <?php else: ?>
                                         <span class="badge badge-success">ชำระเงินเรียบร้อยแล้ว</span>
                                    <?php endif; ?></td>
                                    <td><?php if ($row->ShoppingCart_Order_status == 1): ?>
                                         <span class="badge badge-danger">รอรับออเดอร์</span>
                                       <?php elseif($row->ShoppingCart_Order_status == 2): ?>
                                         <span class="badge badge-primary">กำลังดำเนินการ</span>
                                       <?php else : ?>
                                         <span class="badge badge-success">ออเดอร์สำเร็จ</span>
                                    <?php endif; ?></td>
                                </tr>
                                                    <?php } ;?>
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                      <div class="overview-wrap">
                          <h2 class="title-1">คอร์สบาริสต้า</h2>

                      </div>
                  </div>
                <div class="col-lg-6">
                    <div class="au-card au-card--bg-blue au-card-top-countries m-b-30">
                        <div class="au-card-inner">
                            <div class="table-responsive">
                                <table class="table table-top-countries">
                                    <tbody>
                                      <?php foreach ($course as $row) {?>
                                        <tr>
                                            <td><?php echo $row->course_name; ?></td>
                                            <td class="text-right"><?php echo $row->course_datestart; ?></td>
                                            <td class="text-right"><?php echo $row->course_dateend; ?></td>
                                        </tr>
                                        <?php } ;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">


                    <div class="au-card au-card--bg-blue au-card-top-countries m-b-30">
                        <div class="au-card-inner">
                            <div class="table-responsive">
                                <table class="table table-top-countries">
                                  <thead>
                                    <tr>
                                        <td>ชื่อผู้สมัคร</td>
                                        <td>นามสกุล</td>
                                        <td>ที่อยู่</td>
                                        <td >อีเมล</td>
                                        <td >เบอร์โทรศัพท์</td>
                                        <td >คอร์สที่สมัคร</td>
                                    </tr>
                                </thead>
                                    <tbody>
                                      <?php foreach ($recourse as $row) {?>
                                        <tr>
                                            <td><?php echo $row->recourse_name; ?></td>
                                            <td ><?php echo $row->recourse_surname; ?></td>
                                            <td ><?php echo $row->recourse_address; ?></td>
                                            <td ><?php echo $row->recourse_email; ?></td>
                                            <td ><?php echo $row->recourse_phone; ?></td>
                                            <td ><?php echo $row->course_name; ?></td>
                                        </tr>
                                        <?php } ;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
