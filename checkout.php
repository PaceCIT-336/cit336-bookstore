<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rainy Bookstore - Checkout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/styles.css">
    <link rel="stylesheet" type="text/css" href="assets/modal.css">
    <script src="assets/shop.js" async></script>
</head>
<body>
<header>
    <h1>Checkout</h1>
</header>
<main>
<?php
/* 
    PRICES
    php: 60
    python: 49
    html: 35
    dictionary: 55
*/
$cart = explode('|', htmlentities($_GET['cart']));
$total = htmlentities($_GET['total']);
echo "Cart: ";
for ($i = 0; $i < count($cart); $i++) {
    $title = $cart[$i];
    echo "$title<br>";
}
echo "<br>Total Price: $$total";

// you code here

?>
</main>
</body>
</html>