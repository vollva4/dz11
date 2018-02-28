<?php
namespace basket;
class Basket
{
    public $products = [];
//session_start();
//var_dump($_SESSION);
    public function addBasket($product)
    {
        return $this->products[] = (array)$product;
    }
    public function getTotalPrice()
    {
        $totalPriceProduct = 0;
        foreach ($this->products as $product)
        {
            if(isset($product['count']))
            {
                $totalPriceProduct += (($product['price'] * $product['count']) + $product['delivery']);
            }
            else $totalPriceProduct += ($product['price'] + $product['delivery']);
        }
        return $totalPriceProduct;
    }
    public function deleteProduct($productName)
    {
        foreach ($this->products as $key =>$product) {
            if ($product['nameProduct'] == $productName)
            {
                unset($this->products[$key]);
                return "Товар " . $product['nameProduct'] . " удален из корзины.";
            }
        }
    }
}