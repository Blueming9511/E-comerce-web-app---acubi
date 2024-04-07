<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>

    <!-- boxicon -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


    <!-- css -->
    <link rel="stylesheet" href="asset/style/navbar.css">
    <link rel="stylesheet" href="asset/style/root.css">
    <link rel="stylesheet" href="asset/style/cart.css">
    <link rel="stylesheet" href="asset/style/checkout.css">

    <!-- js -->


    <!-- slider -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="asset/slider/style.css">


    <!-- footer -->
    <link rel="stylesheet" href="asset/footer/style.css">


    <!-- bs5 -->




</head>

<body>
    <div class="header-wrapper">

        <header class="navbar ">

            <div class="dropdown" style="display: none;">
                <button onclick="myFunction()" class="dropbtn"> <box-icon class="bx" name='menu'></box-icon></button>
                <div id="myDropdown" class="dropdown-content"
                    style="display: none; margin-left: 10px; transition-behavior: smooth; transition: all 0.4s ease-in-out;">
                    <a href="" id="current_page">HOME</a>
                    <a href="shop.html">SHOP</a>
                    <a href="about.html">ABOUT</a>
                </div>

            </div>



            <!-- nav -->
            <nav>
                <a href="" id="current_page">HOME</a>
                <a href="shop.html">SHOP</a>
                <a href="about.html">ABOUT</a>
            </nav>


            <!-- Logo -->
            <div class="logo">
                Acubi
            </div>


            <div class="left">


                <!-- Cart -->
                <div class="cart flex-center">

                    <div class="cart-info">
                        $0
                    </div>
                    <svg class="cart-icon" style="cursor: pointer;" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="ast-basket-icon-svg" x="0px"
                        y="0px" width="100" height="100" viewBox="826 826 140 140"
                        enable-background="new 826 826 140 140" xml:space="preserve">
                        <path
                            d="M955.418,887.512c2.344,0,4.343,0.829,6.002,2.486c1.657,1.659,2.486,3.659,2.486,6.002c0,2.343-0.829,4.344-2.486,6.001  c-1.659,1.658-3.658,2.487-6.002,2.487h-0.994l-7.627,43.9c-0.354,2.033-1.326,3.713-2.917,5.04  c-1.593,1.326-3.405,1.989-5.438,1.989h-84.883c-2.033,0-3.846-0.663-5.438-1.989c-1.591-1.327-2.564-3.007-2.918-5.04l-7.626-43.9  h-0.995c-2.343,0-4.344-0.829-6.001-2.487c-1.658-1.657-2.487-3.658-2.487-6.001c0-2.343,0.829-4.343,2.487-6.002  c1.658-1.658,3.659-2.486,6.001-2.486H955.418z M860.256,940.563c1.149-0.089,2.111-0.585,2.885-1.491  c0.773-0.907,1.116-1.936,1.028-3.085l-2.122-27.586c-0.088-1.15-0.585-2.111-1.492-2.885c-0.906-0.774-1.934-1.117-3.083-1.028  c-1.149,0.088-2.111,0.586-2.885,1.492s-1.116,1.934-1.028,3.083l2.122,27.587c0.088,1.105,0.542,2.034,1.359,2.785  c0.818,0.752,1.78,1.128,2.885,1.128H860.256z M887.512,936.319v-27.587c0-1.149-0.42-2.144-1.26-2.984  c-0.84-0.84-1.834-1.26-2.984-1.26s-2.144,0.42-2.984,1.26c-0.84,0.841-1.26,1.835-1.26,2.984v27.587c0,1.149,0.42,2.145,1.26,2.984  c0.84,0.84,1.835,1.26,2.984,1.26s2.144-0.42,2.984-1.26C887.092,938.464,887.512,937.469,887.512,936.319z M912.977,936.319  v-27.587c0-1.149-0.42-2.144-1.26-2.984c-0.841-0.84-1.835-1.26-2.984-1.26s-2.145,0.42-2.984,1.26  c-0.84,0.841-1.26,1.835-1.26,2.984v27.587c0,1.149,0.42,2.145,1.26,2.984s1.835,1.26,2.984,1.26s2.144-0.42,2.984-1.26  C912.557,938.464,912.977,937.469,912.977,936.319z M936.319,936.65l2.122-27.587c0.088-1.149-0.254-2.177-1.027-3.083  s-1.735-1.404-2.885-1.492c-1.15-0.089-2.178,0.254-3.084,1.028c-0.906,0.773-1.404,1.734-1.492,2.885l-2.122,27.586  c-0.088,1.149,0.254,2.178,1.027,3.085c0.774,0.906,1.736,1.402,2.885,1.491h0.332c1.105,0,2.066-0.376,2.885-1.128  C935.777,938.685,936.23,937.756,936.319,936.65z M859.66,855.946l-6.167,27.322h-8.753l6.698-29.245  c0.84-3.89,2.807-7.062,5.902-9.516c3.095-2.453,6.632-3.68,10.611-3.68h11.074c0-1.149,0.42-2.144,1.26-2.984  c0.84-0.84,1.835-1.26,2.984-1.26h25.465c1.149,0,2.144,0.42,2.984,1.26c0.84,0.84,1.26,1.834,1.26,2.984h11.074  c3.979,0,7.516,1.227,10.611,3.68c3.094,2.454,5.062,5.626,5.901,9.516l6.697,29.245h-8.753l-6.168-27.322  c-0.486-1.945-1.491-3.537-3.017-4.774c-1.525-1.238-3.282-1.857-5.272-1.857h-11.074c0,1.15-0.42,2.144-1.26,2.984  c-0.841,0.84-1.835,1.26-2.984,1.26h-25.465c-1.149,0-2.144-0.42-2.984-1.26c-0.84-0.84-1.26-1.834-1.26-2.984h-11.074  c-1.99,0-3.747,0.619-5.272,1.857C861.152,852.409,860.146,854,859.66,855.946z">
                        </path>
                    </svg>


                    <div class="items-amount flex-center">
                        0
                    </div>


                    <div class="cart-sock">
                        <div class="cart-title" style="display: flex;">
                            <span> Shopping cart</span>
                            <div id="cart-close"><box-icon name='x'></box-icon></div>
                        </div>


                        <ul class="cart-body">
                            <li>No items in the shopping cart.</li>
                        </ul>

                        <div class="cart-total" style="display: flex;  justify-content: space-between;">
                            <div class="sub-total">
                                Sub Total
                            </div>

                            <div class="sub-money">
                                $ <span class="total-money">0</span>
                            </div>
                        </div>

                        <div class="cart-submit flex-center">
                            <a href="cart.html" class="view-cart-button">View cart</a>
                            <a href="checkout.html" class="checkout-btn">Check out</a>
                        </div>


                    </div>
                </div>



                <!-- Search -->
                <div class="search flex-center">



                    <box-icon class="search-icon" name='search'></box-icon>


                </div>


                <div class="search-wrapper">
                    <input class="search-input" type="search" placeholder="Search for products..." />
                    <button class="search-btn"><box-icon class="search-icon-submit" name='search'></box-icon></button>
                    <div id="search-close"><box-icon name='x'></box-icon></div>
                </div>


                <!-- Login -->
                <a class="login flex-center" href="login.html">
                    LOG IN
                </a>
            </div>

        </header>

        <div class="header-body">
            <!-- Title -->
            <div class="title">
                Order complete
            </div>

            <div class="process">
                <a href="cart.php">SHOPPING CART</a> > <a id="checkout-details" style="color: rgba(46, 46, 46, 0.427);"
                    href="checkout.php">CHECKOUT
                    DETAILS</a> > <a id="order-complete" href="orderComplete.php" style="color: black;">ORDER COMPLETE</a>
            </div>



            <div class="anouncement" style="text-align: center;">
                Thank you. Your order has been received
            </div>

            <style>
                .order-details {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-direction: column;
                }

                .order-details table {
                    background-color: rgba(211, 211, 211, 0.468);

                    margin: 0px 10px;

                }

                .order-details table th,
                td {
                    padding: 10px;
                }

                .anouncement {
                    font-size: 20px;
                    margin: 1em;
                    font-family: var(--secondary-font);
                }

                .cart-checkout {
                    margin: 1em 10px;
                    width: 95%;
                    max-width: 30em;
                }

                #continueToShop{
                    padding: 1em;
                    color: white;
                    background-color: black;
                    font-weight: bold;
                    
                }
                #continueToShop:hover{
                    padding: 1em;
                    color: rgb(0, 0, 0);
                    background-color: rgb(255, 255, 255);
                    border: 1px solid;
                }
            </style>

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
                            <td class="order-ID">123</td>
                            <td class="order-date">13-4-2024</td>
                            <td class="order-total">$123</td>
                            <td class="order-payment-method">Bank transfer</td>
                        </tr>
                    </tbody>
                </table>

                <div class="cart-checkout">
                    <div class="cart-title">
                        <span class="Product-title">Product</span>
                        <span class="subtotal-title">Sub total</span>
                    </div>

                    <div class="cart-checkout-body">

                        <div class="product-details">
                            <img src="asset/image/SHOP-IMG/i1.jpg" alt="" srcset="">

                            <div class="product-name">
                                Y2k <span class="quantity"> x 1</span>
                            </div>



                        </div>

                        <div class="subtotal">
                            $80.99
                        </div>
                    </div>

                    <div class="cart-footer">
                        <div class="total-title">Total</div>

                        <div class="total-money">
                            $80.99

                        </div>
                    </div>

                </div>

                <a id="continueToShop" href="index.php">Continue to shop</a>
            </div>





        </div>



    </div>


    </div>







    <!-- ==== FOOOTER ==== -->
    <footer class="footer">
        <div class="footer__addr">
            <h1 class="footer__logo">Acubi</h1>

            <h2>Contact</h2>

            <address>
                19 Nguyen Huu Tho street, Tan Phong Wards, District 7, HCMC<br>

                <a class="footer__btn" href="Nguyennguyen8343@gmail.com">Email Us</a>
            </address>
        </div>

        <ul class="footer__nav">




            <li class="nav__item">
                <h2 class="nav__title">Legal</h2>

                <ul class="nav__ul">
                    <li>
                        <a href="#">Privacy Policy</a>
                    </li>

                    <li>
                        <a href="#">Terms of Use</a>
                    </li>


                </ul>
            </li>
        </ul>

        <div class="legal">
            <p>&copy; 2024 Something. All rights reserved.</p>

            <div class="legal__links">
                <span>Made with <span class="heart">♥</span> remotely from Anywhere</span>
            </div>
        </div>
    </footer>
    <!-- ==== js ==== -->

    <!-- navbar -->
    <script src="asset/js/navbar.js"></script>





</body>

</html>


<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />


</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main></main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>


<!-- <label for="firstname">First name</label>
            <label for="lastname">Last name</label> -->

<!-- 

    
<form action="" method="post">
    <div class="Customer-information" style="display: flex; flex-direction: column;">
        <div class="title">
            <h6>CUSTOMER INFORMATION</h6>
        </div>

        <div class="name-input" >
           
            <input type="text" class="firstname" name="firstname">
            <input type="text" class="lastname" name="lastname">
        </div>

        <div class="street-address-input">
            <label for="street-address"></label>
            <input type="text" class="street-address" name="street-address">
        </div>

        <div class="phone-input">
            <input type="tel" class="phone" name="phone">
        </div>


    </div>

    <div class="order-note">
        <div class="title">
            <h6>Order note</h6>
        </div>
        <textarea rows="4" cols="50" name="ordernote"></textarea> 
    </div>
    <div class="payment">
        <div class="title">
            <h6>Payment method</h6>
        </div>
        
        <div class="radiobuttons">
            
        </div>
    </div>



</form> -->