<?php
declare(strict_types=1);

namespace PHPUnit\Handson;

class PriceCalculator
{
    public $price = 0;
    public $salesTaxRate = 0.08;

    public function __construct($price = 0)
    {
        if (!is_int($price)) {
            throw new \InvalidArgumentException("price must be integer");
        }
        if ($price < 0) {
            throw new \RangeException("price must be positive number");
        }
        $this->price = $price;
    }

    public function calculate()
    {
        return $this->price + $this->salesTax();
    }

    public function salesTax()
    {
        return $this->price * $this->salesTaxRate;
    }
}

