<?php
error_reporting(E_ALL);
$animals = [
    'Africa'=> ['Elefant grey', 'Tiger', 'Wild Horse', 'Monkey', 'King Crocodile'],
    'Asia'=> ['Lion', 'Green frog', 'Bison'],
    'Europe'=> ['Wolf', 'Bear', 'Mouse', 'White lama', 'Antilopa gnu'],

];
$doubleWords=[];//создали массив, куда сложим животных из двух слов

foreach ($animals as $key => $continents){ //захожу в массив, где континенты
    foreach ($continents as $animal) {  //захожу в массив со значениями континентов
        $arrayAnimal = explode(' ', $animal);//создала массив, разбив массив $animal на строки.

    }}
foreach($arrayAnimal as $double) {//захожу внутрь массива в его значения
    $c = count($double);//cчитаю количество слов в каждой строке
    if($c==2) {//если количество слов равно двум, создаю новый массив
        $doubleWords[]=$c;


        echo '<pre>';
        print_r($doubleWords);
        echo '</pre>';
    }}