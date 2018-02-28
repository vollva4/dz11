<?php
//namespace Products;
abstract class Product
{
    public $nameProduct;
    public $price;
    public $delivery = 150;
    public function __construct($nameProduct, $price)
    {
        $this->nameProduct = $nameProduct;
        $this->price = $price;
    }
}
?>
