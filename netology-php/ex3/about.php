<?php
error_reporting(E_ALL);
$animals = [
    'Africa'=> ['Elefant grey', 'Tiger', 'Wild Horse', 'Monkey', 'King Crocodile'],
    'Asia'=> ['Lion', 'Green frog', 'Bison'],
    'Europe'=> ['Wolf', 'Bear', 'Mouse', 'White lama', 'Antilopa gnu'],
    
];
$space=' '; //назначаю переменную с пробелом

 foreach ($animals as $key => $continents){ //захожу в массив, где континенты
     foreach ($continents as $animal){  //захожу в массив со значениями континентов
       if(substr_count($animal, $space)==1) { //Если количество пробелов среди значений равно 1, то
          $doubleWords[]=$animal;             //складываем эти слова в массив $doubleWords
}
}
}
foreach ($doubleWords as $double){      //Проходим по массиву $doubleWords и находим все значения

     $arrayAnimal = explode(' ',$double);// Создаем массив чтобы разделить названия зверей из двух слов
     $first[]=$arrayAnimal[0]; //создаем массив из первых слов названия
     $last[]=$arrayAnimal[1]; //создаем массив из вторых слов названия

}
shuffle($first); //перемешиваем первые слова
shuffle($last); //перемешиваем вторые слова
