<?php
include 'login_sucess.php';
include 'productlinkgenerate.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- boxicon -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


    <!-- css -->
    <link rel="stylesheet" href="asset/style/navbar.css">
    <link rel="stylesheet" href="asset/style/root.css">
    <link rel="stylesheet" href="asset/style/home.css">
    <link rel="stylesheet" href="asset/style/cart.css">
    <link rel="stylesheet" href="asset/style/checkout.css">
    <link rel="stylesheet" href="asset/style/item.css">
    <link rel="stylesheet" href="asset/style/ProductCard.css">
    <link rel="stylesheet" href="asset/style/shop.css">
    <link rel="stylesheet" href="asset/style/top_bottom.css">
    <link rel="stylesheet" href="asset/style/productDetails.css">
    <link rel="stylesheet" href="asset/style/order.css">
    <link rel="stylesheet" href="asset/slider/slider.css">
    <script defer src="asset/slider/script.js"></script>
    <link rel="stylesheet" href="asset/style/item.css">

    <!-- js -->
    <script src="script_search.js"></script>

    <!-- slider -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="asset/slider/style.css">


    <!-- footer -->
    <link rel="stylesheet" href="asset/footer/style.css">

    <script src="asset/json/getProduct.js"></script>
</head>

<body>
    <div class="header-wrapper">

        <header class="navbar ">

            <div class="dropdown" style="display: none;">
                <button onclick="myFunction()" class="dropbtn"> <box-icon class="bx" name='menu'></box-icon></button>
                <div id="myDropdown" class="dropdown-content" style="display: none; margin-left: 10px;  transition: all 0.4s ease-in-out;">
                    <a href="index.php" class="home_page">HOME</a>
                    <a href="shop.php" class="shop_page">SHOP</a>
                    <a href="orderComplete.php" class="yourOrder_page">YOUR ORDER</a>
                    <a href="about.php" class="about_page">ABOUT</a>
                </div>

            </div>



            <!-- nav -->
            <nav>
                <a href="index.php" id="home_page">HOME</a>
                <a href="shop.php" id="shop_page">SHOP</a>
                <a href="orderComplete.php" id="yourOrder_page">YOUR ORDER</a>
                <a href="about.php" id="about_page">ABOUT</a>
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
                    <svg class="cart-icon" style="cursor: pointer;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="ast-basket-icon-svg" x="0px" y="0px" width="100" height="100" viewBox="826 826 140 140" enable-background="new 826 826 140 140" xml:space="preserve">
                        <path d="M955.418,887.512c2.344,0,4.343,0.829,6.002,2.486c1.657,1.659,2.486,3.659,2.486,6.002c0,2.343-0.829,4.344-2.486,6.001  c-1.659,1.658-3.658,2.487-6.002,2.487h-0.994l-7.627,43.9c-0.354,2.033-1.326,3.713-2.917,5.04  c-1.593,1.326-3.405,1.989-5.438,1.989h-84.883c-2.033,0-3.846-0.663-5.438-1.989c-1.591-1.327-2.564-3.007-2.918-5.04l-7.626-43.9  h-0.995c-2.343,0-4.344-0.829-6.001-2.487c-1.658-1.657-2.487-3.658-2.487-6.001c0-2.343,0.829-4.343,2.487-6.002  c1.658-1.658,3.659-2.486,6.001-2.486H955.418z M860.256,940.563c1.149-0.089,2.111-0.585,2.885-1.491  c0.773-0.907,1.116-1.936,1.028-3.085l-2.122-27.586c-0.088-1.15-0.585-2.111-1.492-2.885c-0.906-0.774-1.934-1.117-3.083-1.028  c-1.149,0.088-2.111,0.586-2.885,1.492s-1.116,1.934-1.028,3.083l2.122,27.587c0.088,1.105,0.542,2.034,1.359,2.785  c0.818,0.752,1.78,1.128,2.885,1.128H860.256z M887.512,936.319v-27.587c0-1.149-0.42-2.144-1.26-2.984  c-0.84-0.84-1.834-1.26-2.984-1.26s-2.144,0.42-2.984,1.26c-0.84,0.841-1.26,1.835-1.26,2.984v27.587c0,1.149,0.42,2.145,1.26,2.984  c0.84,0.84,1.835,1.26,2.984,1.26s2.144-0.42,2.984-1.26C887.092,938.464,887.512,937.469,887.512,936.319z M912.977,936.319  v-27.587c0-1.149-0.42-2.144-1.26-2.984c-0.841-0.84-1.835-1.26-2.984-1.26s-2.145,0.42-2.984,1.26  c-0.84,0.841-1.26,1.835-1.26,2.984v27.587c0,1.149,0.42,2.145,1.26,2.984s1.835,1.26,2.984,1.26s2.144-0.42,2.984-1.26  C912.557,938.464,912.977,937.469,912.977,936.319z M936.319,936.65l2.122-27.587c0.088-1.149-0.254-2.177-1.027-3.083  s-1.735-1.404-2.885-1.492c-1.15-0.089-2.178,0.254-3.084,1.028c-0.906,0.773-1.404,1.734-1.492,2.885l-2.122,27.586  c-0.088,1.149,0.254,2.178,1.027,3.085c0.774,0.906,1.736,1.402,2.885,1.491h0.332c1.105,0,2.066-0.376,2.885-1.128  C935.777,938.685,936.23,937.756,936.319,936.65z M859.66,855.946l-6.167,27.322h-8.753l6.698-29.245  c0.84-3.89,2.807-7.062,5.902-9.516c3.095-2.453,6.632-3.68,10.611-3.68h11.074c0-1.149,0.42-2.144,1.26-2.984  c0.84-0.84,1.835-1.26,2.984-1.26h25.465c1.149,0,2.144,0.42,2.984,1.26c0.84,0.84,1.26,1.834,1.26,2.984h11.074  c3.979,0,7.516,1.227,10.611,3.68c3.094,2.454,5.062,5.626,5.901,9.516l6.697,29.245h-8.753l-6.168-27.322  c-0.486-1.945-1.491-3.537-3.017-4.774c-1.525-1.238-3.282-1.857-5.272-1.857h-11.074c0,1.15-0.42,2.144-1.26,2.984  c-0.841,0.84-1.835,1.26-2.984,1.26h-25.465c-1.149,0-2.144-0.42-2.984-1.26c-0.84-0.84-1.26-1.834-1.26-2.984h-11.074  c-1.99,0-3.747,0.619-5.272,1.857C861.152,852.409,860.146,854,859.66,855.946z">
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
                    <div class="search-input-wrapper">
                        <input class="search-input" type="search" placeholder="Search for products..." onkeyup="showResult(this.value)"/>
                        <button class="search-btn"><box-icon class="search-icon-submit" name='search'></box-icon></button>
                        <div id="search-close"><box-icon name='x'></box-icon></div><br>
                    </div>
                    <div class="searchbar">
                        <table>
                            <tr>
                                <td><img src="" alt=""></td>
                                <td>Name</td>
                                <td>Price</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!-- Login -->

                <?php
                if (isset($_SESSION["user"])) {
                    echo '<a class="login flex-center" href="logout.php">
                    Welcome, ' . $user . '
                </a>';
                } else {
                    echo ' <a class="login flex-center" href="login.php">
                    LOG IN
                    
                </a>
                        ';
                }
                ?>
            </div>
        </header>
