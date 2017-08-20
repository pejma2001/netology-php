<?php

$continents = array (
    'Africa'=> array('double'=>'Addax nasomaculatus', 'Pholidota',
        'Cricetinae', 'Dasyuridae', 'double'=>'Papio cynocephalus'),
    'Asia'=> array('Ovis', 'double'=>'Cervus duvauceli', 'Bison'),
    'Europe'=> array('double'=>'Syncerus caffer', 'Bos', 'Osphranter',
        'double'=>'Lama vicugna', 'double'=>'Antilocapra americana'),
    
);
$animals = array();
  foreach ($continents as $key => $continent) {
      foreach ($continent as $double){
        if (strpos ($double, ' ') !== false) {
            array_push ($animals, $double);
        }
      }
  }

print_r($animals);

?>