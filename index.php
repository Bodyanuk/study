<?php 

$index = \includes\IndexController;

$index->actionIndex();

$index->getHeader();

$index->setTemplate('/pages/foo'); // This is error place

$index->goodBye();

$index->endOfApplication();
?>
