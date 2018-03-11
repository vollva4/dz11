<?php
require_once 'autoload.php';
$Tv = new Products\tele\Tele("Sony", 50000, "White");
$Car = new Products\cars\Car("BMW", 10000, "X3", 2.5, 1);
$Pen = new Products\pens\Pen("Pen", 50, "red");
$bas = new basket\Basket();
$Tv->setTitle('Samsung');
echo '<br>';
print_r($Tv);
$bas->addBasket($Tv);
$bas->addBasket($Car);
$bas->addBasket($Pen);
echo '<pre>';
var_dump($bas->deleteProduct("Sony"));
var_dump($bas->getTotalPrice());
echo '</pre>';
$order = new basket\Order($bas);
var_dump($order->printOrder());
var_dump($order->getPrice());
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Netology Lesson 11</title>
</head>
<body>
	<div style="width: 80%; margin: 0 auto;">
		<h2>Пространства имен</h2>
    <p>Позволяют нам создавать области видимости для классов, функций и констант,
        желательно чтобы namespace и имена классов совпадали с файловой системой (если в файле один класс, название
        класса совпадает с названием файла), тогда проще ориентироваться.
    <h2>Exception</h2>
    <p>Класс в PHP который можно наследовать или создавать от него объекты. Механизм прерывания кода(помогает
        отлавливать и обрабатывать ошибки):</p>
    <ul>
        <li>throw (гененрирует(выбрасывает) исключения)</li>
        <li>try (помещаем код который генерирует исключение (может вызвать ошибку))</li>
        <li>catch (ловим исключение (решение в случае ошибки))</li>
    </ul>
		<pre>

	</div>
</body>
</html>