<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("productlinks.xml");

$products = $xmlDoc->getElementsByTagName('products');

//get the q parameter from URL
$q = $_GET["q"];

//lookup all links from the xml file if length of q>0
$hint = "";
$response = "<table>";
if (strlen($q) > 0) {
    foreach ($products as $product) {
        // Get the img, name, and price elements of the product
        $img = $product->getElementsByTagName('img')->item(0)->nodeValue;
        $name = $product->getElementsByTagName('name')->item(0)->nodeValue;
        $price = $product->getElementsByTagName('price')->item(0)->nodeValue;

        // Find a link matching the search text
        if (strpos($name, $q) !== false) {
            // Construct the HTML link for each product
            $response .= "<tr>
                            <td class=\"name\"><a href='product_details.php?name=$name'>$name</a></td>
                            <td rowspan=\"2\" class=\"img\"><a href='product_details.php?name=$name'><img src='$img' alt='$name'></a></td>
                        </tr>
                        <tr class=\"break-row\">
                            <td class=\"price\">$price " . " $ " . "</td>
                        </tr>";
        }
        $response .= "</table>";
    }
}
// Set output to "no suggestion" if no hint was found
// or to the correct values

//output the response
echo $response;
