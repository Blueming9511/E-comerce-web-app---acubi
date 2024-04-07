<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("productlinks.xml");

$products = $xmlDoc->getElementsByTagName('products');

//get the q parameter from URL
$q = $_GET["q"];

//lookup all links from the xml file if length of q>0
$hint = "";
if (strlen($q) > 0) {
    foreach ($products as $product) {
        // Get the img, name, and price elements of the product
        $img = $product->getElementsByTagName('img')->item(0)->nodeValue;
        $name = $product->getElementsByTagName('name')->item(0)->nodeValue;
        $price = $product->getElementsByTagName('price')->item(0)->nodeValue;

        // Find a link matching the search text
        if (strpos($name, $q) !== false) {
            // Construct the HTML link
            $hint .= "<a href='$name' target='_blank'>$img</a><br>";
        }
    }
}
// Set output to "no suggestion" if no hint was found
// or to the correct values
if ($hint == "") {
    $response = "no suggestion";
} else {
    $response = $hint;
}

//output the response
echo $response;
?> 