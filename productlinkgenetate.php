
<?php
include 'class/shop_class.php';

$xml  = new SimpleXMLElement('<products></products>');
$products = new Shop;
$showProducts = $products -> displayProducts();

if ($showProducts) {
    while ($results = $showProducts -> fetch_assoc()) {
        $element = $xml -> addChild('product');
        $linkImg = "admin/uploads/".$results['product_img'];
        $element -> addChild('img', $linkImg);
        $element -> addChild("name", $results['product_name']);
        $element -> addChild("price", $results['product_price']);
    }
}
$xml -> asXML('productlinks.xml');
?>