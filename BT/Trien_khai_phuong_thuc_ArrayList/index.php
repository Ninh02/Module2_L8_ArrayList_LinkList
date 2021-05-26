<?php
include_once "ArrList.php";
$element=new ArrList([],6);
echo $element->size();
echo "<br>";
$element->add(1);
$element->add(2);
$element->add(3);
$element->add(4);
$element->add(5);
$element->insert(2,6);
echo "<pre>";
print_r($element);