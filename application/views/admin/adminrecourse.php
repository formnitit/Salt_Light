<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">จัดการข้อมูลผู้สมัครคอร์ส</h3>
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
                        <th>ชื่อผู้สมัคร</th>
                        <th>นามสกุล</th>
                        <th>ที่อยู่</th>
                        <th>อีเมล</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>คอร์สที่สมัคร</th>
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
                        <td><?php echo $row->recourse_name; ?></td>

                        <td class="desc"><?php echo $row->recourse_surname; ?></td>
                        <td><?php echo $row->recourse_address; ?></td>
                        <td>
                            <span class="block-email"><?php echo $row->recourse_email; ?></span>
                        </td>
                        <td>
                            <span class="status--process"><?php echo $row->recourse_phone; ?></span>
                        </td>
                        <td><?php echo $row->course_name; ?></td>
                        <td>
                            <div class="table-data-feature">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <a href="<?php echo site_url('adminrecourse/edit/').$row->recourse_id; ?>"><i class="zmdi zmdi-edit"></i>
                                </button>
                                <button  class="item" data-toggle="tooltip" data-placement="top" title="Delete" onclick="myFunction()">
                                      <a href="<?php echo site_url('adminrecourse/delete/').$row->recourse_id;?>" </a><i class="zmdi zmdi-delete"></i>
                                      <p id="demo"></p>
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
