<div class="main-content">
    <div class="section__content section__content--p20">
        <div class="container-fluid">
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">data table</h3>
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
                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <i class="zmdi zmdi-plus"></i>เพิ่มข้อมูล</button>
                <button class="au-btn-icon btn btn-danger au-btn--small">
                    <i class="zmdi zmdi-minus"></i>ลบข้อมูล</button>
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
                        <th>ชื่อผู้ใช้</th>
                        <th>ชื่อ - นามสกุล</th>
                        <th>อีเมล</th>
                        <th>วันที่</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>ประเภทผู้ใช้</th>
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
                        <td><?php echo $row->member_name; ?></td>

                        <td class="desc"><?php echo $row->member_name_lastname; ?></td>
                        <td>
                            <span class="block-email"><?php echo $row->member_email; ?></span>
                        </td>
                        <td><?php echo $row->member_date; ?></td>
                        <td>
                            <span class="status--process"><?php echo $row->member_phonenumber; ?></span>
                        </td>
                        <td><?php echo $row->member_type; ?></td>
                        <td>
                            <div class="table-data-feature">

                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </button>
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
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
</div>
</div>
</div>
