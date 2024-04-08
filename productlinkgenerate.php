<?php
include 'class/shop_class.php';

// Check if the productlinks.xml file exists
$productLinksFile = 'productlinks.xml';
if (file_exists($productLinksFile)) {
    // Load the existing XML file
    $xml = simplexml_load_file($productLinksFile);
    if ($xml === false) {
        // Handle XML loading error
        die('Error loading XML file: ' . libxml_get_last_error()->message);
    }
} else {
    // Create a new XML structure if the file doesn't exist
    $xml = new SimpleXMLElement('<products></products>');
}

$products = new Shop;
$showProducts = $products->displayProducts();
var_dump($showProducts);
if ($showProducts) {
    while ($result = $showProducts->fetch_assoc()) {
        var_dump($result);
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
if ($xml->asXML($productLinksFile) === false) {
    // Handle XML saving error
    die('Error saving XML file');
}
?>
