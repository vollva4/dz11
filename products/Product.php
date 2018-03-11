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
    public function getTitle()
    {
        return $this->nameProduct;
    }
    public function setTitle($nameProduct)
    {
        $this->nameProduct = $nameProduct;
        return $this;
    }
    public function getPrice()
    {
        return round($this->price*(1 - 0.01 * $this->discount));
    }
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }
    public function getDiscount()
    {
        return $this->discount;
    }
    public function setDiscount($discount)
    {
        $this->discount = $discount;
        return $this;
    }
    public function getDeliveryPrice()
    {
        return $this->deliveryPrice;
    }
    public function setDeliveryPrice($deliveryPrice)
    {
        $this->deliveryPrice = $deliveryPrice;
        return $this;
    }
}
?>
