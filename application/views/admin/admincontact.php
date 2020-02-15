<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <div class="table-data__tool">
          <h3 class="title-5 m-b-35">ข้อมูลติดต่อ</h3>
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
                        <th>ชื่อ - นามสกุล</th>
                        <th>วัน/เวลา ส่งข้อความ</th>
                        <th>อีเมล</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>ข้อความ</th>
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
                        <td><?php echo $row->contact_name; ?></td>
                        <td><?php echo $row->contact_date; ?></td>
                        <td class="desc"><?php echo $row->contact_email; ?></td>
                        <td>
                            <span class="block-email"><?php echo $row->contact_phone; ?></span>
                        </td>
                        <td><?php echo $row->contact_message; ?></td>
                        <td>
                            <div class="table-data-feature">
                                <button  class="item" data-toggle="tooltip" data-placement="top" title="Delete" onclick="myFunction()">
                                      <a href="<?php echo site_url('admincontact/delete/').$row->contact_id;?>" ></a><i class="zmdi zmdi-delete"></i>
                                      <p id="demo"></p>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <?php } ;?>
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>
</div>
