
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <div class="table-data__tool">
          <h3 class="title-5 m-b-35">ดูข้อมูลบทความ</h3>
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
              <a href="<?php echo site_url('Employee/add_blog_employ')?>">
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
                        <th>ชื่อบทความ</th>
                        <th>หมวดหมู่บทความ</th>
                        <th>วันที่โพสต์</th>
                        <th>โพสต์โดย</th>
                        <th>รูปภาพบทความ</th>
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
                        <td>
                          <?php echo $row->blog_name; ?>
                        </td>
                        <td class="desc">
                          <?php echo $row->blog_type_name; ?>
                        </td>
                        <td>
                            <span class="block-email"><?php echo $row->blog_date; ?></span>
                        </td>
                        <td>
                            <span class="status--process"><?php echo $row->member_name; ?></span>
                        </td>
                        <td>
                            <img src="<?php echo base_url('assets/img/uploadimg'); ?>/<?php echo $row->blog_img; ?>" width="100px">
                        </td>
                        <td>
                            <div class="table-data-feature">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <a href="<?php echo site_url('Employee/edit_blog_employ/').$row->blog_id; ?>"><i class="zmdi zmdi-edit"></i>
                                </button>
                                <button  class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                      <a href="<?php echo site_url('Employee/del_blog_employ/').$row->blog_id;?>" onclick="return confirm('confirm to delete');"><i class="zmdi zmdi-delete"></i></a>
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
