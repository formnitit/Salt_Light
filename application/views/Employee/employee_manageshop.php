
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <div class="table-data__tool">
            <h3 class="title-5 m-b-35">จัดการการสั่งซื้อ</h3>


        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>เลขที่สั่งซื้อ</th>
                        <th>จำนวน</th>
                        <th>ราคา</th>
                        <th>ชื่อผู้สั่งซื้อ</th>
                        <th>สถานะการชำระเงิน</th>
                        <th>สถานะการรับออเดอร์</th>

                    </tr>
                </thead>
                <tbody>
                  <?php foreach ($query as $row) {?>

                    <tr class="spacer"></tr>
                    <tr class="tr-shadow">

                        <td><span class="block-email"><?php echo $row->ShoppingCart_id; ?></td>
                        <td class="desc"><?php echo $row->ShoppingCart_Quantity; ?></td>
                        <td>
                            <?php echo $row->ShoppingCart_total; ?></span>
                        </td>
                        <td><span class="status--process"><?php echo $row->ShoppingCart_Name; ?></td>
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
                          <td>
                        <td>
                            <div class="table-data-feature">
                              <button class="item" data-toggle="tooltip" data-placement="top" title="">
                                  <a href="<?php echo site_url('Employee/shop_employ_success/').$row->ShoppingCart_id; ?>"><i class="zmdi zmdi-check-circle"></i>
                              </button>
                                <button class="item" data-toggle="tooltip" data-placement="top" title="View">
                                    <a href="<?php echo site_url('Employee/show_manage_employ/').$row->ShoppingCart_id; ?>"><i class="zmdi zmdi-eye"></i>
                                </button>
                                <button  class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                      <a href="<?php echo site_url('Employee/del_manage_employ/').$row->ShoppingCart_id;?>" onclick="return confirm('confirm to delete');"><i class="zmdi zmdi-delete"></i></a>
                                </button>
                            </div>
                        </td>
                    </tr>
<a href="#"></a>
                    <?php } ;?>

                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>
</div>
