
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <div class="table-data__tool">
          <h3 class="title-5 m-b-35">ดูข้อมูลโปรโมชั่น</h3>
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
                        <th>ชื่อโปรโมชั่น</th>
                        <th>รูปภาพโปรโมชั่น</th>
                        <th>รหัสโปรโมชั่น</th>
                        <th>ราคาส่วนลด</th>
                        <th>ด/ว/ป เริ่มโปรโมชั่น</th>
                        <th>ด/ว/ป สิ้นสุดโปรโมชั่น</th>
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
                        <td><?php echo $row->promotion_name; ?></td>
                        <td><img src="<?php echo base_url('assets/img/uploadimg'); ?>/<?php echo $row->promotion_img; ?>" width="100px" height="100px"></td>
                        <td>
                            <span class="block-email"><?php echo $row->promotion_code; ?></span>
                        </td>
                          <td><?php echo $row->promotion_discount; ?>.00</td>
                        <td><?php echo $row->promotion_datestart; ?></td>
                        <td>
                            <span class="status--process"><?php echo $row->promotion_dateend; ?></span>
                        </td>
                    </tr>
                    <?php } ;?>

                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>
</div>
