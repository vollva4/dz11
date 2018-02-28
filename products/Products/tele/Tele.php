<?php
namespace Products\tele;
class Tele extends \Product implements teleImplement  {
	public $diagonal;
	public $color;
    public function __construct($nameProduct, $price, $color)
    {
        parent::__construct($nameProduct, $price);
        $this->color = $color;
    }
	public function teleInfo () {
		echo '<br>';
		print_r($this);
	}
}
?>