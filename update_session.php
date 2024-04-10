    <?php
    require_once 'class/shop_class.php';

    session_start();
    $product = new Shop;
    $productId = $_GET['productId'];
    $productP = $product -> displayProductPriceById($productId) ;
    if ($productP) {
        $productPrice = $productP -> fetch_assoc()['product_price'];
    }
    else {
        $productPrice = 0;   
    }
    $type = $_GET['type'];

    // Cập nhật số lượng sản phẩm trong session
    if (isset($_SESSION['itemAmount'][$productId]) && isset($_SESSION['totalAmount'])) {
        if($type === 'minus') { 
            $_SESSION['itemAmount'][$productId] -= 1; 
            $_SESSION['totalAmount'] -= $productPrice;
        }
        else if ($type = 'add') {
            $_SESSION['itemAmount'][$productId] += 1; 
            $_SESSION['totalAmount'] += $productPrice;
        }
    }
    // header("Location: cart.php");
?>