<?php

class Product 
{
    protected string $name;
    protected float $price;
    protected bool $discount;
    protected bool $alcohol;

    public function __construct(string $name, float $price, bool $discount,)
    {
        $this->name = $name;
        $this->price = $price;
        $this->discount = $discount;
    }
    public function getPrice()
    {
        return print_r ($this->price);
    }

}

