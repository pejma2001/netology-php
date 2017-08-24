<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

$city = "Bryansk"; 
$mode = "json"; 
$units = "metric"; 
$lang = "en"; 
$appid = '121508442903343fdb8b8871b8be77ec';
$countDay = 7; 
 

$url = 'http://api.openweathermap.org/data/2.5/forecast/daily?'.
  "appid=$appid&q=$city&mode=$mode&units=$units&cnt=$cnt&lang=$lang";

$data = @file_get_contents($url);

if($data){
    
    $dataJson = json_decode($data);
    
    $arrayDays = $dataJson->list;
    
    foreach($arrayDays as $oneDay){
        echo "Morning: " . $oneDay->temp->morn . "<br/>"; 
        echo "Day: " . $oneDay->temp->day . "<br/>";   
        echo "Evening: " . $oneDay->temp->eve . "<br/>";    
        echo "Night: " . $oneDay->temp->night . "<br/>";    
        echo "Wind speed: " . $oneDay->speed . "<br/>";
        echo "Weather: " . $oneDay->weather[0]->description . "<br/>";
        echo "Pressure: " . $oneDay->pressure . "<br/>";
        echo "Humidity: " . $oneDay->humidity . "<br/>";
        echo "<hr/>";
    }
}else{
    echo "Server is unavailable!";
}
    ?>
    </body>
</html>