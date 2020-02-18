
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
                                <th >Payment status</th>
                                <th>Order status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($query as $row) {?>
                            <tr>
                                <td><?php echo $row->ShoppingCart_id; ?></td>
                                <td><?php echo $row->ShoppingCart_Name; ?></td>
                                <td><?php echo $row->ShoppingCart_pricec; ?></td>
                                <td>รอการชำระ</td>
                                <td>รับออเดอรแล้ว</td>
                                <td>
                                    <button type="button" class="site-btn" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-eye"></i>&nbsp;View</button>


                                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                          <div class="modal-body">
                                            <form>
                                              <div class="row">


                                              <div class="form-group col-lg-6">
                                                <label for="recipient-name" class="col-form-label">Name:</label>
                                                <input type="text" class="form-control" id="recipient-name" value="<?php echo $row->ShoppingCart_Name; ?>">
                                                <label for="recipient-name" class="col-form-label">Email:</label>
                                                <input type="text" class="form-control" id="recipient-name" value="<?php echo $row->ShoppingCart_Email; ?>">
                                                <label for="recipient-name" class="col-form-label">Phone:</label>
                                                <input type="text" class="form-control" id="recipient-name" value="<?php echo $row->ShoppingCart_Phone; ?>">
                                                <label for="recipient-name" class="col-form-label">ID Order:</label>
                                                <input type="text" class="form-control" id="recipient-name" value="<?php echo $row->ShoppingCart_id; ?>">
                                                <label for="recipient-name" class="col-form-label">ID Product:</label>
                                                <input type="text" class="form-control" id="recipient-name" value="<?php echo $row->product_id; ?>">
                                                <label for="recipient-name" class="col-form-label">Date:</label>
                                                <input type="text" class="form-control" id="recipient-name" value="<?php echo $row->ShoppingCart_date; ?>">
                                                <label for="recipient-name" class="col-form-label">Quantity:</label>
                                                <input type="text" class="form-control" id="recipient-name" value="<?php echo $row->ShoppingCart_Quantity; ?>">
                                                <label for="recipient-name" class="col-form-label">Total:</label>
                                                <input type="text" class="form-control" id="recipient-name" value="฿<?php echo $row->ShoppingCart_pricec; ?>.00">

                                              </div>

                                              <div class="form-group col-lg-6">
                                                <label for="recipient-name" class="col-form-label">Payment status:</label>
                                                <input type="text" class="form-control" id="recipient-name" value="<?php echo $row->ShoppingCart_Payment_status; ?>">
                                                <label for="recipient-name" class="col-form-label">Order status:</label>
                                                <input type="text" class="form-control" id="recipient-name" value="<?php echo $row->ShoppingCart_Order_status; ?>">
                                                <label for="recipient-name" class="col-form-label">Slip:</label>
                                                <img src="<?php echo base_url('assets/img/Slip'); ?>/<?php echo $row->ShoppingCart_slip; ?>" height="450px" width="600px">
                                              </div>
                                              </div>

                                            </form>
                                          </div>

                                        </div>
                                      </div>
                                    </div>


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
