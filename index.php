<?php
    include('arr.php');

    $arr = new Arr;
    $arr->set(10);
    $arr->set(11);
    $arr->set(12);
    $arr->set(13);

    //echo $arr->getSum(); // виведе 0
    echo "Початковий:";
    $result=$arr->get();
    
    echo "Додаємо: <pre>";
    $mas=array(20,21,22,23,24);
    print_r($mas);
    
    $arr->add($mas);
    echo "Отримано:";
    $result=$arr->get();