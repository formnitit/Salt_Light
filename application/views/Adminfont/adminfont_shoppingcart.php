
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="<?php echo site_url('adminfont/index'); ?>"><i class="fa fa-home"></i> Home</a>
                    <a href="<?php echo site_url('adminfont/shop'); ?>">Shop</a>
                    <span>Shopping Cart</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Shopping Cart Section Begin -->
<?php if (empty($this->cart->contents())) : ?>
                <div class="cart-main-area pt-70 pb-70">
                    <div class="container">
                        <div class="cart-empty-content text-center " style="font-size: 24px;">
                          <br>
                          <br>

                            <i class="fa fa-shopping-cart fa-10x" aria-hidden="true" ></i>
                            <div class="empty-btn">
                              <p>Your cart is currently empty.</p>
                                <a href="<?php echo site_url('adminfont/shop'); ?>"><button type="button" class="btn btn-warning"><i class="fa fa-reply"></i>&nbsp; Return to shop</button>
                                  <br>
                                  <br>
                                  <br>
                                  <br>


                            </div>
                        </div>
                    </div>
                </div>
    <?php else : ?>
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cart-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th class="p-name">Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th><i class="ti-close"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $total = 0 ; ?>
                          <?php $i = 1; ?>

<?php foreach ($this->cart->contents() as $items): ?>

        <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
                            <tr>
                                <td class="cart-pic first-row"><img src="<?php echo base_url('assets/img/uploadimg'); ?>/<?php echo $items['img']; ?>" height="100px" width="100px"></td>
                                <td class="cart-title first-row">
                                    <h5><?php echo $items['name']; ?></h5>
                                </td>
                                <td class="p-price first-row">฿ <?php echo $items['price']; ?>.00</td>
                                <td class="qua-col first-row">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="<?php echo $items['qty']; ?>">
                                        </div>
                                    </div>
                                </td>
                                <td class="total-price first-row">฿<?php echo $this->cart->format_number($items['subtotal']); ?></td>
                                <td class="close-td first-row"><a href="cart_remove?id=<?php echo $items['rowid']; ?>"><i class="ti-close"></i></a></td>
                            </tr>
                            <?php $total += $items['subtotal'];
                             $i++; ?>

                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="cart-buttons">
                            <a href="#" class="primary-btn continue-shop">Continue shopping</a>
                            <a href="#" class="primary-btn up-cart">Update cart</a>
                        </div>
                        <div class="discount-coupon">
                            <h6>Discount Codes</h6>
                            <form action="<?php echo site_url('ShoppingCart/Promotion'); ?>" class="coupon-form">
                                <input type="text" placeholder="Enter your codes" value="">
                                <button type="submit" class="site-btn coupon-btn">Apply</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-4">
                        <div class="proceed-checkout">
                            <ul>
                                <li class="subtotal">Subtotal <span>฿<?php echo ($total); ?>.00</li>
                                    <li class="subtotal">Discount <span>฿-00.00</li>
                                <li class="cart-total">Total <span>฿<?php echo ($total); ?>.00</span></li>
                            </ul>
                            <a href="<?php echo site_url('adminfont/checkoutadmin'); ?>" class="proceed-btn">PROCEED TO CHECK OUT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif ?>
<!-- Shopping Cart Section End -->
