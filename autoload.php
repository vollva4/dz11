<?php
function autoloadClass($nameClass)
{
    $class = __DIR__ . DIRECTORY_SEPARATOR . 'products' . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $nameClass) . '.php';
    require_once $class;
}
spl_autoload_register('autoloadClass');
?>