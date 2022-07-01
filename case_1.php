<?php

declare(strict_types=1);

$products = (array)[
    ['name'=>'Banana', 'amount'=>6, 'price'=>1, 'tax'=>6],
    ['name'=>'Apple', 'amount'=>3, 'price'=>1.5, 'tax'=>6],
    ['name'=>'Bottles of wine', 'amount'=>2, 'price'=>10, 'tax'=>21] 
];

$priceTotal= 0;
$priceTotalWithTax= 0;
$cartTotal = 0;
$tax = 0;

foreach($products as $i => $product) {
    $priceTotal += $product['price'] * $product['amount'];
    $tax += $product['amount'] * ($product['price'] / 100) * $product['tax'];
}

$priceTotalWithTax = $priceTotal + $tax;

foreach($products as $i => $product) {
    $cartTotal += $product['amount'];
}

?>

<h2 id="cart-total-products">Items in cart<br>
    <?php echo $cartTotal ?></h2>
<h2 id="cart-total-price">Total price of your products <br>
    <?php echo '€',  $priceTotal ?></h2>
<h2 id="cart-total-price">Total price of your products including vat <br>
    <?php echo '€',  $priceTotalWithTax ?></h2>
