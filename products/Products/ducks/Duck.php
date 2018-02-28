<?php
namespace Products\ducks;

class Duck extends \Product implements duckImplement{
    public $mainland;
    public $total_length;
    public function __construct($nameProduct, $price, $mainland, $total_length)
    {
         parent::__construct($nameProduct, $price);
        $this->mainland = $mainland;
        $this->total_length = $total_length;
    }
    public function duckInfo () {
        echo '<br>';
        print_r($this);
    }
}
?>