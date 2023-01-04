<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rainy Bookstore - Checkout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/styles.css">
</head>
<body>
<header>
    <h1>Checkout</h1>
</header>
<main id="checkoutpg">
<?php
/* 
    PRICES
    php: 60
    python: 49
    html: 35
    dictionary: 55
*/
// create book array with the titles as keys and prices as the values
$book_arr = array(
    "Learning PHP, MySQL & JavaScript" => 60,
    "Learning Python" => 49,
    "HTML & CSS 9th Ed" => 35,
    "American Heritage Dictionary" => 55,
);

// retrieve the cart items and total price passed from the shop page
$cart = explode('|', htmlentities($_GET['cart']));
$price = htmlentities($_GET['total']);

//print the information in table-like divs
echo "<h2>Cart</h2><div class=\"table\"><div class=\"row header\"><div class=\"cell\">Title</div><div class=\"cell\">Price</div></div>";
for ($i = 0; $i < count($cart); $i++) {
    $title = $cart[$i];
    echo "<div class=\"row\"><div class=\"cell\">$title</div><div class=\"cell\">$</div></div>";
}
// calculate tax and echo it in a new table row 

echo "<div class=\"row summary\"><div class=\"cell\">Total Price:</div><div class=\"cell\">$$price</div></div>";

// 

?>
</main>
</body>
</html>