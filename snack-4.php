<?php

$numbers = [];

while(count($numbers) <= 15) {
    $numb = mt_rand(1, 99);
    if(!in_array($numb , $numbers)) 
        $numbers[] = $numb;
};

echo var_dump($numbers)

?>