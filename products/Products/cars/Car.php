<?php
namespace Products\cars;
class Car extends \Product implements carImplement {
//
    public $color;
    public $engineVol;
    public $count;
    public function __construct($nameProduct, $price, $model, $engineVol, $count = 0)
    {
        parent::__construct($nameProduct, $price);
        $this->engineVol = $engineVol;
        $this->count = $count;
    }
    public function carInfo () 
    {
        echo '<br>';
        print_r($this);
    }

}
?>