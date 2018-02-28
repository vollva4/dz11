<?php
namespace basket;
class Order extends Basket
{
    public $bas;
    public function __construct(Basket $bas)
    {
        return $this->bas = $bas;
    }
    public function getPrice()
    {
        echo "Стоимость заказа: " . $this->bas->getTotalPrice() . "руб";
    }
    public function print_order()
    {
        $arr_name_price = [];
        foreach ($this->bas->products as $product) {
            $arr_name_price[] = '<b>Продукт: </b>' . $product['nameProduct'] . ' стоит ' . $product['price'] . "руб";
        }
        echo implode(', <br>', $arr_name_price);
    }
}