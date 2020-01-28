<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">data course</h3>
        <div class="table-data__tool">
            <div class="table-data__tool-left">
                <div class="rs-select2--light rs-select2--md">
                    <select class="js-select2" name="property">
                        <option selected="selected">All Properties</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
                <div class="rs-select2--light rs-select2--sm">
                    <select class="js-select2" name="time">
                        <option selected="selected">Today</option>
                        <option value="">3 Days</option>
                        <option value="">1 Week</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
            </div>
            <div class="table-data__tool-right">
              <a href="<?php echo site_url('adminaddcourse')?>">
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
                        <th>ชื่อคอร์ส</th>
                        <th>รูปภาพคอร์ส</th>
                        <th>ด/ว/ป เริ่มคอร์ส</th>
                        <th>ด/ว/ป สิ้นสุดคอร์ส</th>
                        <th>ราคาคอร์ส</th>
                        <!-- <th>รายระเอียดคอร์ส</th> -->
                        <th>ทักษะจากคอร์ส</th>
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
                        <td><?php echo $row->course_name; ?></td>
                        <td><img src="<?php echo base_url('assets/img/uploadimg'); ?>/<?php echo $row->course_img; ?>" width="100px"></td>
                        <td><?php echo $row->course_datestart; ?></td>
                        <td><?php echo $row->course_dateend; ?></td>
                        <td>
                            <span class="block-email"><?php echo $row->course_price; ?></span>
                        </td>
                        <!-- <td><?php echo $row->course_detail; ?></td> -->
                        <td>
                            <span class="status--process"><?php echo $row->course_skill; ?></span>
                        </td>
                        <td>
                            <div class="table-data-feature">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <a href="<?php echo site_url('admincourse/edit/').$row->course_id; ?>"><i class="zmdi zmdi-edit"></i>
                                </button>
                                <button  class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                      <a href="<?php echo site_url('admincourse/delete/').$row->course_id;?>" onclick="return confirm('confirm to delete');"><i class="zmdi zmdi-delete"></i></a>
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
