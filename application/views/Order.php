<?php $user = $this->db->get_where('member',['member_email'=>$this->session->userdata('member_email')])->row_array() ; ?>
<?php $order = $this->db->get_where('shoppingcart', ['member_ID' => $user['member_ID']])->result_array(); ?>
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="<?php echo site_url('welcome'); ?>"><i class="fa fa-home"></i> Home</a>
                    <a href="<?php echo site_url('shop'); ?>">Shop</a>
                    <span>Shopping Cart</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->



<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cart-table">

                    <table>
                        <thead>
                            <tr>
                                <th>Order</th>
                                <th>Name</th>
                                <th>Total</th>
                                <th>Details</th>
                                <th >Payment status</th>
                                <th>Order status</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($order as $order) {?>
                            <tr>
                                <td><?php echo $order['ShoppingCart_id'] ; ?></td>
                                <td><?php echo $order['ShoppingCart_Name'] ; ?></td>
                                <td>฿ <?php echo $order['ShoppingCart_total'] ; ?></td>
                                <td>#<?php echo $order['ShoppingCart_Details'] ; ?></td>
                                <td><?php if ($order['ShoppingCart_Payment_status'] == 1): ?>
                                  <style media="screen">
                                  .badge-warning {
                                    color: #212529;
                                    background-color: #ffc107;
                                  }
                                  .badge {
                                    display: inline-block;
                                    padding: .25em .4em;
                                    font-size: 90%;
                                    font-weight: 700;
                                    line-height: 1;
                                    text-align: center;
                                    white-space: nowrap;
                                    vertical-align: baseline;
                                    border-radius: .25rem;
                                  }
                                  </style>
                                      <span class="badge badge-warning">กำลังตรวจสอบการชำระเงิน</span>
                                   <?php else: ?>
                                     <span class="badge badge-success">ชำระเงินเรียบร้อยแล้ว</span>
                                <?php endif; ?></td>
                                <td><?php if ($order['ShoppingCart_Order_status'] == 1): ?>
                                     <span class="badge badge-danger">รอรับออเดอร์</span>
                                   <?php elseif($order['ShoppingCart_Order_status'] == 2): ?>
                                     <span class="badge badge-primary">กำลังดำเนินการ</span>
                                   <?php else : ?>
                                     <span class="badge badge-success">ออเดอร์สำเร็จ</span>
                                <?php endif; ?></td>
                                <td>
                                    <button type="button" class="site-btn" data-toggle="modal" data-target="#bd-example-modal-lg<?php echo $order['ShoppingCart_id'] ;?>"><i class="fa fa-eye"></i>&nbsp; Slip</button>


                                    <div class="modal fade bd-example-modal-lg" id="bd-example-modal-lg<?php echo $order['ShoppingCart_id'] ;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-lg">
                                        <div class="modal-content" style="width: 300px;">
                                          <div class="modal-body">
                                            <form>
                                              <div class="row">

                                              <div class="col-12 border border-dark">
                                                  <img src="<?php echo base_url('assets/img'); ?>/footter.jpg" width="200px" height="80px" />
                                                  <h4>Salt&Light</h4>
                                                  <p class="lead">ID Order: <?php echo $order['ShoppingCart_id'] ; ?></p>
                                                  <p>ID Product: <?php echo $order['product_id'] ; ?></p>
                                                  <p>Name: <?php echo $order['ShoppingCart_Name'] ; ?></p>
                                                  <p>Email: <?php echo $order['ShoppingCart_Email'] ; ?></p>
                                                  <p>Phone: <?php echo $order['ShoppingCart_Phone'] ; ?></p>
                                                  <p>Date: <?php echo $order['ShoppingCart_date'] ; ?></p>
                                                  <p>Quantity: <?php echo $order['ShoppingCart_Quantity'] ; ?></p>
                                                  <p>Total: ฿ <?php echo $order['ShoppingCart_total'] ; ?>.00</p>
                                              </div>

                                              </div>

                                            </form>
                                          </div>

                                        </div>
                                      </div>
                                    </div>


                                </td>
                                <td class="close-td first-row"><a href="<?php echo site_url('Order/delete/').$order['ShoppingCart_id'] ;?>" onclick="return confirm('confirm to delete');">
                                  <i class="ti-close"></i></a>
                                </td>

                            </tr>

                        </tbody>
  <?php } ;?>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Shopping Cart Section End -->
