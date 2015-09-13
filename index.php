<?php 

$index = \includes\IndexController;

$index->actionIndex();

$index->setTemplate('/pages/foo'); // This is error place

$index->actionEnd();
?>
