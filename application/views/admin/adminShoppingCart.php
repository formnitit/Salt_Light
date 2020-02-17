
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <div class="table-data__tool">
            <h3 class="title-5 m-b-35">จัดการ การสั่งซื้อ</h3>


        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>เลขที่สั่งซื้อ</th>
                        <th>วันที่สั่งซื้อ</th>
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
                        <td><?php echo $row->ShoppingCart_date; ?></td>
                        <td class="desc"><?php echo $row->ShoppingCart_Quantity; ?></td>
                        <td>
                            <?php echo $row->ShoppingCart_total; ?></span>
                        </td>
                        <td><span class="status--process"><?php echo $row->ShoppingCart_Name; ?></td>
                        <td>รอการชำระ</td>
                        <td>รับออเดอร์</td>
                        <td>
                            <div class="table-data-feature">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <a href="<?php echo site_url('adminshop/edit/').$row->product_id; ?>"><i class="zmdi zmdi-edit"></i>
                                </button>
                                <button  class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                      <a href="<?php echo site_url('AdminShoppingCart/delete/').$row->ShoppingCart_id;?>" onclick="return confirm('confirm to delete');"><i class="zmdi zmdi-delete"></i></a>
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
