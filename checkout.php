    <?php
    include 'header.php';
    require_once 'db.php';
    session_start();
    $data = getData($_SESSION['user']);
    if(isset($data)) {
        $address = $data['address'];
        $firstname = $data['firstname'];
        $lastname = $data['lastname'];
        $phone = $data['phonenumber'];
    }
    else {
        $address = '';
        $firstname = '';
        $lastname = '';
        $phone = '';
    }
    echo "<script>  alert(" . json_encode($data) . ");</script>";
    ?>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.querySelector('form');
            form.addEventListener('submit', function(event) {
                event.preventDefault();
                const formData = new FormData(form);
                const products = [];
                const rows = document.querySelectorAll('.cart-checkout-body tr:not(.cart-title)');

                for (let i = 0; i < rows.length; i += 2) {
                    const productNameCell = rows[i].querySelector('.product-name');
                    const productQuantityCell = rows[i + 1].querySelector('.product-quantity');
                    const productPriceCell = rows[i].querySelector('.product-price');
                    const product = {
                        id: productNameCell.id,
                        name: productNameCell.textContent,
                        price: parseFloat(productPriceCell.textContent.replace('$', '')),
                        quantity: parseInt(productQuantityCell.textContent.replace(',', '').trim().split(' ')[1])
                    };

                    products.push(product);
                }

                const data = {
                    firstName: formData.get('firstname'),
                    lastName: formData.get('lastname'),
                    address: formData.get('address'),
                    phone: formData.get('phone'),
                    paymentMethod: formData.get('payment-method'),
                    totalMoney: parseFloat(document.querySelector('.total-money').innerText.replace('$', '')),
                    products: JSON.stringify(products)
                };

                const data_text = new URLSearchParams(data).toString();
                const url = "http://localhost/shop/billadd.php?" + data_text;
                window.location.href = url;
            });
        })
    </script>

    <div class="header-body">
        <!-- Title -->
        <div class="title">
            Checkout details
        </div>

        <div class="process">
            <a href="cart.php">SHOPPING CART</a> > <a id="checkout-details" href="checkout.php">CHECKOUT
                DETAILS</a> > <a id="order-complete" href="orderComplete.php">ORDER COMPLETE</a>
        </div>



        <!-- billing process -->


        <div class="billing-process">
            <div class="billing-wrapper">

                <form action="" method="post" enctype="multipart/form-data">

                    <h3>Billing details</h3>
                    <!-- name -->
                    <div class="fullname">
                        <div class="label-input">
                            <label for="firstname">First Name</label>
                            <input value="<?= $firstname?>" type="text" name="firstname" id="firstname" required>
                        </div>
                        <div class="label-input">
                            <label for="lastname">Last Name</label>
                            <input value="<?= $lastname?>" type="text" name="lastname" id="lastname" required>
                        </div>
                    </div>


                    <!-- address -->
                    <div class="label-input">
                        <label for="address">Address</label>
                        <input value="<?= $address?>" type="text" name="address" id="address" required>
                    </div>

                    <!-- phone number -->
                    <div class="label-input">
                        <label for="phone">Phone number</label>
                        <input value="<?= $phone?>" type="tel" name="phone" id="phone" required>
                    </div>

                    <h3>Payment method</h3>

                    <style>
                        .payment-method {
                            display: flex;
                            gap: 1em;

                        }

                        label {
                            margin-bottom: 5px;
                        }
                    </style>
                    <div class="payment-method">

                        <div>
                            <input type="radio" name="payment-method" id="Bank-transfer" value="Bank-transfer" required>
                            <label for="Bank-transfer">Bank transfer</label>

                        </div>

                        <div>
                            <input type="radio" name="payment-method" id="cash" value="cash" required>
                            <label for="cash">Cash</label>
                        </div>


                    </div>
                    <button class="placeOrder-btn" type="submit">Place order</button>

                </form>

            </div>

            <div class="cart-wrapper">
                <h3>
                    Your order </h3>



                <div class="cart-checkout">
                    <table class="cart-checkout-body">
                        <tr class="cart-title">
                            <td class="product-title">Product</td>
                            <td class="subtotal-title">Sub total</td>
                        </tr>

                        <?php
                        if (isset($_SESSION['itemAmount'])) {
                            $product = array();
                            foreach ($_SESSION['itemAmount'] as $productId => $amount) {
                                $product[] = $productId;
                            }
                            $strId = implode(', ', $product);
                            $query = "SELECT * FROM tbl_product WHERE product_id IN ($strId) ORDER BY product_id DESC";
                            $con = mysqli_connect("localhost", "root", "", "acubi");
                            $results = mysqli_query($con, $query);

                            $subTotal = 0;

                            while ($result = $results->fetch_assoc()) {
                                $subTotal += $result['product_price'] * $_SESSION['itemAmount'][$result['product_id']];
                        ?>
                                <tr>
                                    <td class="product-name" id=<?php echo $result['product_id'] ?>><?php echo $result['product_name'] ?></td>
                                    <td rowspan="2" class="product-price">
                                        $ <?php echo $result['product_price'] * $_SESSION['itemAmount'][$result['product_id']] ?>.00
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product-quantity">
                                        x <?php echo $_SESSION['itemAmount'][$result['product_id']] ?>
                                    </td>
                                </tr>

                        <?php
                            }
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
        </div>
    </div>
    </div>
    </div>







    <!-- ==== FOOOTER ==== -->
    <?php
    include 'footer.php';
    ?>