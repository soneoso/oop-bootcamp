<?php

declare (strict_types=1);

class Drink extends Product
{


    public function __construct(string $name, float $price, bool $discount, bool $alcohol)
    {
        parent::__construct($name , $price , $discount , $alcohol);
    }

    public function getName()
    {
        return $this-> name;
    }
    public function getPrice()
    {
        return $this-> price;
    }
    public function checkDiscount()
    {
        return $this-> discount;
    }
    public function getAlcohol()
    {
        return $this-> alcohol;
    }
}