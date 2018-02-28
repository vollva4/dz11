<?php
namespace Products\pens;
class Pen extends \Product implements penImplement{ 
	public $color;
    public function __construct($nameProduct, $price, $color)
    {
        parent::__construct($nameProduct, $price);
        $this->color = $color;
    }

	public function penInfo () {
		echo '<br>';
		print_r($this);
	}
}
?>