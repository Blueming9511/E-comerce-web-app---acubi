<?php
include 'header.php';
include 'class/bill_class.php';
include 'class/billProduct.php';

$billProduct = new BillProduct;
$bill = new Bill;

$billID = $bill->newestID();
$bill_id = $billID->fetch_assoc()['bill_id'];

$bill_info = $bill->displayBill($bill_id)->fetch_assoc();

$products = $billProduct->displayBillProduct($bill_id)->fetch_all(MYSQLI_ASSOC);

$totalResult = $billProduct->displayTotalMoney($bill_id);
$total = $totalResult->fetch_row()[0];

?>
<div class="header-body">
    <!-- Title -->
    <div class="title">
        Order complete
    </div>

    <div class="process">
        <a href="cart.php">SHOPPING CART</a> > <a id="checkout-details" style="color: rgba(46, 46, 46, 0.427);" href="checkout.php">CHECKOUT DETAILS</a> > <a id="order-complete" href="orderComplete.php" style="color: black;">ORDER COMPLETE</a>
    </div>

    <div class="anouncement" style="text-align: center;">
        Thank you. Your order has been received
    </div>

    <div class="order-details">
        <table>
            <thead>
                <tr>
                    <th>Order number</th>
                    <th>Date</th>
                    <th>Total</th>
                    <th>Payment method</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td class="order-ID"><?php echo $bill_id ?></td>
                    <td class="order-date"><?php echo $bill_info['bill_date'] ?></td>
                    <td class="order-total">$<?php echo $total?></td>
                    <td class="order-payment-method"><?php echo $bill_info['payment_method'] ?></td>
                </tr>
            </tbody>
        </table>

        <div class="cart-checkout">
            <table class="cart-checkout-body">
                <tr class="cart-title">
                    <td class="product-title">Product</td>
                    <td class="subtotal-title">Sub total</td>
                </tr>
                <?php
                $subTotal = 0; // Khởi tạo subTotal
                foreach ($products as $product) {
                    $subTotal += $product['subtotal'];
                ?>
                    <tr>
                        <td class="product-name" id=<?php echo $product['product_id'] ?>><?php echo $product['product_name'] ?></td>
                        <td rowspan="2" class="product-price">
                            $<?php echo $product['subtotal'] ?>.00
                        </td>
                    </tr>
                    <tr>
                        <td class="product-quantity">
                            x <?php echo $product['quantity'] ?>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
            <div class="cart-footer">
                <div class="total-title">Total</div>
                <div class="total-money">
                    $<?php echo $subTotal ?>.00
                </div>
            </div>
        </div>
    </div>
    <a id="continueToShop" href="index.php">Continue to shop</a>
</div>

<?php
unset($_SESSION['itemAmount']);
unset($_SESSION['totalAmount']);
foreach ($_SESSION as $key => $value) {
    echo "$key: $value<br>";
}

?>

<?php
include 'footer.php';
?>
