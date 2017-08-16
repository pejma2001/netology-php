<?php

$continents=array (
    'Africa'=> array ('Mammuthus columbi', 'Mammuthus primigenius', 'Mammuthus meridionalis',
        'Mammuthus imperator', 'Mammuthus jeffersoni', 'Mammuthus exilis'),
    'Asia'=> array('Mammuthus africanavus', 'Mammuthus armeniacus', 'Mammuthus fraasi'),
    'Europe'=> array('Mammuthus hayi', 'Mammuthus lamarmorae', 'Mammuthus rumanus',
        'Mammuthus subplanifrons ', 'Mammuthus sungari')
    
);

$animals = array();
foreach($continents as $animalname => $animal) {
    foreach ($animal as $animalsName=>$anname) 
      

    echo '<h2>' 
        echo $animalname.'-'. 
            echo '<pre>';
            echo $animalsName. ':'.$anname.PHP_EOL;
}
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
