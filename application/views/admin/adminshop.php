
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <div class="table-data__tool">
          <h3 class="title-5 m-b-35">จัดการสินค้า</h3>
            <div class="table-data__tool-left">
                <div class="rs-select2--light rs-select2--md">
                    <!-- <select class="js-select2" name="property">
                        <option selected="selected">All Properties</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                    </select> -->
                    <div class="dropDownSelect2"></div>
                </div>
                <div class="rs-select2--light rs-select2--sm">
                    <!-- <select class="js-select2" name="time">
                        <option selected="selected">Today</option>
                        <option value="">3 Days</option>
                        <option value="">1 Week</option>
                    </select> -->
                    <div class="dropDownSelect2"></div>
                </div>
            </div>
            <div class="table-data__tool-right">
              <a href="<?php echo site_url('adminaddshop'); ?>">
                <button class="au-btn-icon btn btn-success au-btn--small">
                    <i class="zmdi zmdi-plus"></i>เพิ่มข้อมูล</button></a>
            </div>
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>
                            <label class="au-checkbox">
                                <input type="checkbox">
                                <span class="au-checkmark"></span>
                            </label>
                        </th>
                        <th>รหัสสินค้า</th>
                        <th>รูปสินค้า</th>
                        <th>ชื่อสินค้า</th>
                        <th>หมวดหมู่สินค้า</th>
                        <th>ราคาสินค้า</th>
                        <th>จำนวนสินค้า</th>
                        <th>ส่วนลด</th>

                    </tr>
                </thead>
                <tbody>
                  <?php foreach ($query as $row) {?>

                    <tr class="spacer"></tr>
                    <tr class="tr-shadow">
                        <td>
                            <label class="au-checkbox">
                                <input type="checkbox">
                                <span class="au-checkmark"></span>
                            </label>
                        </td>
                        <td><span class="block-email"><?php echo $row->product_id; ?></td>
                        <td><img src="<?php echo base_url('assets/img/uploadimg'); ?>/<?php echo $row->product_img; ?>" width="100px" height="100px" ></td>
                        <td class="desc"><?php echo $row->product_name; ?></td>
                        <td>
                            <?php echo $row->product_type_name; ?></span>
                        </td>
                        <td><span class="status--process"><?php echo $row->product_price; ?></td>
                        <td>
                            <?php echo $row->product_qty; ?></span>
                        </td>
                        <td>
                            <?php echo $row->product_promotion; ?></span>
                        </td>
                        <td>
                            <div class="table-data-feature">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <a href="<?php echo site_url('adminshop/edit/').$row->product_id; ?>"><i class="zmdi zmdi-edit"></i>
                                </button>
                                <button  class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                      <a href="<?php echo site_url('adminshop/delete/').$row->product_id;?>" onclick="return confirm('confirm to delete');"><i class="zmdi zmdi-delete"></i></a>
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
