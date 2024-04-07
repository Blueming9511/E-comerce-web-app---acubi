
<?php
    include 'login_sucess.php';
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
    <!-- <link rel="stylesheet" href="asset/style/ProductCard.css"> -->
    <link rel="stylesheet" href="asset/slider/slider.css">
    <script defer src="asset/slider/script.js"></script>
    <link rel="stylesheet" href="asset/style/item.css">
    <!-- js -->


    <!-- slider -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="asset/slider/style.css">


    <!-- footer -->
    <link rel="stylesheet" href="asset/footer/style.css">

    <script src="asset/json/getProduct.js"></script>

    <style>
        .home_page{
            color: black;
        }
    </style>

</head>

<body>
    <div class="header-wrapper">

        <?php
            include 'header.php';
        ?>

        <main class="header-body flex-center">

            <div class="img" style="position: relative;">
                <img src="asset/image/poster.png" alt="" srcset="">
                <a href="#new-collection" class="shop-now-btn">SHOP NOW</a>
            </div>
        </main>


        <section id="new-collection" class="new-collection">
            <h2 style="text-align: center; font-size: 44px;">Summer Collection</h2>
            <div class="swiper-container">

                <section id="tranding">
                    <div class="container">
                        <div class="swiper tranding-slider">
                            <div class="swiper-wrapper">
                                <!-- Slide-start -->
                                <div class="swiper-slide tranding-slide">
                                    <div class="tranding-slide-img">
                                        <img src="asset/slider/images/item1.jpg" alt="Tranding">
                                    </div>
                                    <div class="tranding-slide-content">
                                        <h1 class="item-price">$20</h1>
                                        <div class="tranding-slide-content-bottom">
                                            <h2 class="item-name">
                                                Special Pizza
                                            </h2>

                                        </div>
                                    </div>
                                </div>
                                <!-- Slide-end -->
                                <!-- Slide-start -->
                                <div class="swiper-slide tranding-slide">
                                    <div class="tranding-slide-img">
                                        <img src="asset/slider/images/item2.jpg" alt="Tranding">
                                    </div>
                                    <div class="tranding-slide-content">
                                        <h1 class="item-price">$20</h1>
                                        <div class="tranding-slide-content-bottom">
                                            <h2 class="item-name">
                                                Meat Ball
                                            </h2>

                                        </div>
                                    </div>
                                </div>
                                <!-- Slide-end -->
                                <!-- Slide-start -->
                                <div class="swiper-slide tranding-slide">
                                    <div class="tranding-slide-img">
                                        <img src="asset/slider/images/item3.jpg" alt="Tranding">
                                    </div>
                                    <div class="tranding-slide-content">
                                        <h1 class="item-price">$40</h1>
                                        <div class="tranding-slide-content-bottom">
                                            <h2 class="item-name">
                                                Burger
                                            </h2>

                                        </div>
                                    </div>
                                </div>
                                <!-- Slide-end -->
                                <!-- Slide-start -->
                                <div class="swiper-slide tranding-slide">
                                    <div class="tranding-slide-img">
                                        <img src="asset/slider/images/item4.jpg" alt="Tranding">
                                    </div>
                                    <div class="tranding-slide-content">
                                        <h1 class="item-price">$15</h1>
                                        <div class="tranding-slide-content-bottom">
                                            <h2 class="item-name">
                                                Frish Curry
                                            </h2>

                                        </div>
                                    </div>
                                </div>
                                <!-- Slide-end -->
                                <!-- Slide-start -->
                                <div class="swiper-slide tranding-slide">
                                    <div class="tranding-slide-img">
                                        <img src="asset/slider/images/item5.jpg" alt="Tranding">
                                    </div>
                                    <div class="tranding-slide-content">
                                        <h1 class="item-price">$15</h1>
                                        <div class="tranding-slide-content-bottom">
                                            <h2 class="item-name">
                                                Pane Cake
                                            </h2>

                                        </div>
                                    </div>
                                </div>
                                <!-- Slide-end -->
                                <!-- Slide-start -->
                                <div class="swiper-slide tranding-slide">
                                    <div class="tranding-slide-img">
                                        <img src="asset/slider/images/item3.jpg" alt="Tranding">
                                    </div>
                                    <div class="tranding-slide-content">
                                        <h1 class="item-price">$20</h1>
                                        <div class="tranding-slide-content-bottom">
                                            <h2 class="item-name">
                                                Vanilla cake
                                            </h2>

                                        </div>
                                    </div>
                                </div>
                                <!-- Slide-end -->
                                <!-- Slide-start -->

                                <!-- Slide-end -->
                            </div>

                            <div class="tranding-slider-control">
                                <div class="swiper-button-prev slider-arrow">
                                    <ion-icon name="arrow-back-outline"></ion-icon>
                                </div>
                                <div class="swiper-button-next slider-arrow">
                                    <ion-icon name="arrow-forward-outline"></ion-icon>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </section>


        <section id="best-seller" class="best-seller" style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
            <h2 style="font-size: 30px;  font-family: var(--emphasized-font); margin-bottom: 1em; display: flex; justify-content: center;">
                Best Selling</h2>

            <div class="shop-field">

            </div>

        </section>

        <div class="products-preview">

            <div class="preview" data-target="1">
                <div class="image">
                    <img src="asset/image/SHOP-IMG/i1.jpg" alt="">
                </div>
                <div class="pro-info">
                    <i class="fas fa-times"></i>
                    <h3>organic strawberries</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
                    <div class="category">Category : top</div>
                    <div class="price">$2.00</div>
                    <div class="buttons">
                        <a href="#" class="cart">add to cart</a>
                    </div>
                </div>

            </div>
            <div class="preview" data-target="2">
                <div class="image">
                    <img src="asset/image/SHOP-IMG/i2.jpg" alt="">
                </div>
                <div class="pro-info">
                    <i class="fas fa-times"></i>
                    <h3>organic strawberries</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
                    <div class="category">Category : top</div>
                    <div class="price">$2.00</div>
                    <div class="buttons">
                        <a href="#" class="cart">add to cart</a>
                    </div>
                </div>

            </div>
            <div class="preview" data-target="3">
                <div class="image">
                    <img src="asset/image/SHOP-IMG/m3.jpg" alt="">
                </div>
                <div class="pro-info">
                    <i class="fas fa-times"></i>
                    <h3>organic strawberries</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
                    <div class="category">Category : top</div>
                    <div class="price">$2.00</div>
                    <div class="buttons">
                        <a href="#" class="cart">add to cart</a>
                    </div>
                </div>

            </div>
            <div class="preview" data-target="4">
                <div class="image">
                    <img src="asset/image/SHOP-IMG/m6.jpg" alt="">
                </div>
                <div class="pro-info">
                    <i class="fas fa-times"></i>
                    <h3>organic strawberries</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
                    <div class="category">Category : top</div>
                    <div class="price">$2.00</div>
                    <div class="buttons">
                        <a href="#" class="cart">add to cart</a>
                    </div>
                </div>

            </div>



        </div>



    </div>




    <!-- ==== FOOOTER ==== -->

    <!-- ==== js ==== -->
    <script src="asset/js/addToCart.js"></script>
    <!-- navbar -->
    <script src="asset/js/navbar.js"></script>

    <!-- slider -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="asset/slider/script.js"></script>




</body>

</html>