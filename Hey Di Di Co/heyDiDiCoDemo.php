<?php

//Entities
require_once('inc\Entity\Product.class.php');

//Utility
require_once('inc\Utility\Page.class.php');

$np1 = new Product('Fiddle',1,'kg');
$np1->setLength(60);
$np1->setLengthMeasure('cm');
$np1->setWidth(20);
$np1->setWidthMeasure('cm');
$np1->setHeight(10);
$np1->setHeightMeasure('cm');

$np2 = new Product('Dish',0.1,'kg');
$np2->setLength(30);
$np2->setLengthMeasure('cm');
$np2->setWidth(30);
$np2->setWidthMeasure('cm');
$np2->setHeight(5);
$np2->setHeightMeasure('cm');

$np3 = new Product('Spoon',0.05,'kg');
$np3->setLength(15);
$np3->setLengthMeasure('cm');
$np3->setWidth(5);
$np3->setWidthMeasure('cm');
$np3->setHeight(2);
$np3->setHeightMeasure('xm');

$products[] = $np1;
$products[] = $np2;
$products[] = $np3;


if (empty($_GET) || $_GET["action"] == "addProduct") {
    Page::showAddForm();
}
if (!empty($_POST)) {
    $np = new Product($_POST['name'], $_POST['weight'],$_POST['weightMeasure']);
    $np->setLength($_POST['length']);
    $np->setLengthMeasure($_POST['lengthMeasure']);
    $np->setWidth($_POST['width']);
    $np->setWidthMeasure($_POST['widthMeasure']);
    $np->setHeight($_POST['height']);
    $np->setHeightMeasure($_POST['heightMeasure']);
    $products[] = $np;
}


Page::$title = "Hey Di Di Co";
Page::header();
Page::listProducts($products);
Page::footer();

?>