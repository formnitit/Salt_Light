
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
                                <td><?php echo $row->ShoppingCart_total; ?></td>
                                <td>รอการชำระ</td>
                                <td>รับออเดอรแล้ว</td>
                                <td>
                                  <button type="button" class="btn btn-warning"><i class="fa fa-reply"></i>&nbsp;View</button>
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
