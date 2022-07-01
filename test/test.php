<?php

declare(strict_types=1);

// =================================================================================================
//                                     ARRAY CALCULATION 
// =================================================================================================


// $products = (array)[
//     ['name'=>'Banana', 'amount'=>6, 'price'=>1, 'tax'=>6],
//     ['name'=>'Apple', 'amount'=>3, 'price'=>1.5, 'tax'=>6],
//     ['name'=>'Bottles of wine', 'amount'=>2, 'price'=>10, 'tax'=>21] 
// ];

// $priceTotal= 0;
// $priceTotalWithTax= 0;
// $cartTotal = 0;
// $tax = 0;

// foreach($products as $i => $product) {
//     $priceTotal += $product['price'] * $product['amount'];
//     $tax += $product['amount'] * ($product['price'] / 100) * $product['tax'];
// }

// $priceTotalWithTax = $priceTotal + $tax;

// foreach($products as $i => $product) {
//     $cartTotal += $product['amount'];
// }

// =================================================================================================
//                                      CLASS CALCULATION 
// =================================================================================================

// class Products {
//     public string $name;
//     public int $amount;
//     public float $price;
//     public int $tax;

    
//         function __construct($name, $amount, $price, $tax) {
//             $this->name = $name;
//             $this->amount = $amount;
//             $this->price = $price;
//             $this->tax = $tax;
//         }
//         function calcPrice () {
//            $priceTotalClass = $this-> amount * $this->price;
//             echo $priceTotalClass;
//         }
        
        
        
// }   

//     $banana = new Products ("banana", 6 , 1,  6);
//     $apple = new Products ("apple",3,1.5, 6 );
//     $wine = new Products (  "wine", 2, 10, 21);

//     $basket = array ($banana, $apple, $wine);

//         foreach ($basket as $i => $basket) {
//             $priceTotalClass = $this-> amount * $this->price;
//         }

//     $priceTotalClass = 0;
//     $taxClass = 0;

// =================================================================================================
//                                       TESTING AREA
//==================================================================================================






?>

<!-- =================================================================================================
                                        HTML STRUCTURE
================================================================================================= -->

<!-- WITH ARRAY -->
<!-- <h1>Calculation with array</h1>
<p id="cart-total-products">Items in cart <br>
    <?php echo $cartTotal ?></p>
<p id="cart-total-price">Total price of your products <br>
    <?php echo '€',  $priceTotalClass ?></p>
<p id="cart-total-price">Total price of your products including vat <br>
    <?php echo '€',  $priceTotalWithTax ?></p> -->

    <!-- WITH CLASSES -->
<!-- <h1>Calculation with classes</h1>
<p id="cart-total-products2">Items in cart <br>
<?php echo $cartTotal ?> </p>
<p id="cart-total-products2">Total price of your products <br>
<?php echo $priceTotal ?> </p>
<p id="cart-total-products2">Total price of your products including vat<br>
<?php echo $priceTotalWithTax ?> </p> -->
