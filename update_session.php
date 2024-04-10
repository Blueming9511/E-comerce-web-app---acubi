    <?php
    require_once 'class/shop_class.php';

    session_start();

    $product = new Shop;
    $productId = $_GET['productId'];
    $productPrice = $product -> displayProductPriceById($productId) -> fetch_assoc();
    $type = $_GET['type'];

    // Cập nhật số lượng sản phẩm trong session
    if (isset($_SESSION['itemAmount'][$productId])) {
        if($type === 'minus') {
            $_SESSION['itemAmount'][$productId] -= 1; 
            $_SESSION['totalAmount'] -= $productPrice;
        }
        else if ($type = 'add') {
            $_SESSION['itemAmount'][$productId] += 1; 
            $_SESSION['totalAmount'] += $productPrice;
        }
    }

    echo ( $_SESSION['itemAmount'][$productId]);

    ?>