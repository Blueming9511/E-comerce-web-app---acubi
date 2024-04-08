<?php
include 'class/shop_class.php';
$xml = new SimpleXMLElement('<products></products>');
$products = new Shop;
$showProducts = $products->displayProducts();
if ($showProducts) {
    while ($result = $showProducts->fetch_assoc()) {
        // Add a new <product> element for each product
        $element = $xml->addChild('product');
        $linkImg = "admin/uploads/" . $result['product_img'];
        $element->addChild('img', $linkImg);
        $element->addChild("id", $result['product_id']);
        $element->addChild("name", $result['product_name']);
        $element->addChild("price", $result['product_price']);
    }
}

// Save the modified XML data to the productlinks.xml file
$xml->asXML('productlinks.xml');
?>
