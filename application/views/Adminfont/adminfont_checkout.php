
<?php $user = $this->db->get_where('member',['member_email'=>$this->session->userdata('member_email')])->row_array() ; ?>
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="<?php echo site_url('adminfont/index'); ?>"><i class="fa fa-home"></i> Home</a>
                    <a href="<?php echo site_url('adminfont/shop'); ?>">Shop</a>
                    <span>Check Out</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Shopping Cart Section Begin -->
<section class="checkout-section spad">
    <div class="container">
        <form action="<?php echo site_url('adminfont/add_orderadmin'); ?>" class="checkout-form" enctype="multipart/form-data" method="post">
            <div class="row">
                <div class="col-lg-6">

                    <h4>Biiling Details</h4>
                    <div class="row">
                      <input type="text" name="id" value="<?php echo $user['member_ID'] ;?>" hidden>
                        <div class="col-lg-12">
                            <label for="fir">Name-Lastname<span>*</span></label>
                            <input type="text" id="fir" name="ShoppingCart_Name" required>
                        </div>

                        <div class="col-lg-6">
                            <label for="email">Email Address<span>*</span></label>
                            <input type="text" id="email" name="ShoppingCart_Email" required>
                        </div>
                        <div class="col-lg-6">
                            <label for="phone">Phone<span>*</span></label>
                            <input type="phone" id="phone" name="ShoppingCart_Phone" required>
                        </div>
                        <div class="col-lg-6 form-group">
                          <label for="exampleFormControlFile1">Upload Slip</label>
                          <input type="file" class="form-control-file btn btn-outline-light text-dark" id="ShoppingCart_slip" name="ShoppingCart_slip" accept="img/*" required>
                        </div>

                        <div class="cart-table">
                          <div class="col-lg-12">
                            <table>
                                <thead>
                                    <tr>
                                        <th>bank</th>
                                        <th>Account Name</th>
                                        <th>Account number</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td><img src="<?php echo base_url('assets/img/logo'); ?>/scb.jpg" width="100px" height="100px"> </td>
                                        <td>พงศธร มหาวิเศษทรัพย์</td>
                                        <td>590-428145-5</td>

                                    </tr>
                                    <tr>
                                        <td><img src="<?php echo base_url('assets/img/logo'); ?>/K.jpg" width="100px" height="100px"> </td>
                                        <td>นิธิศ เชื้อลื้อ</td>
                                        <td>590-428145-6</td>

                                    </tr>
                                    <tr>
                                        <td><img src="<?php echo base_url('assets/img/logo'); ?>/kb.jpg" width="100px" height="100px"> </td>
                                        <td>เชี่ยวชาญ มิหนุน</td>
                                        <td>590-428145-7</td>

                                    </tr>

                                </tbody>
                            </table>
                            </div>
                        </div>

                    </div>
                </div>



                <div class="col-lg-6">
                    <div class="place-order">
                        <h4>Your Order</h4>
                        <div class="order-total">
                            <ul class="order-table">
                                <li>Product <span>Total</span></li>
                                <?php $total = 0 ; ?>
                                <?php $i = 1; ?>

      <?php foreach ($this->cart->contents() as $items): ?>

              <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
                                <li class="fw-normal"><?php echo $items['name']; ?> x <?php echo $items['qty']; ?> <span>฿ <?php echo $this->cart->format_number($items['subtotal']); ?></span></li>

                                <?php $total += $items['subtotal'];
                                 $i++; ?>
<?php endforeach; ?>
<br>
                                <li class="fw-normal">Subtotal <span>฿ <?php echo ($total); ?>.00</span></li>
                                <li class="fw-normal">Subtotal <span>฿ .00</span></li>
                                <li class="total-price">Total <span>฿ <?php echo $this->cart->format_number($this->cart->total()); ?></span></li>

                            </ul>

                            <div class="order-btn">
                                <button type="submit" class="site-btn place-btn">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Shopping Cart Section End -->
