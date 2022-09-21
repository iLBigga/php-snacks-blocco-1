<?php

$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];

$nCheck = mb_strlen($name);
$eCheck1 = strstr($email, '@');
$eCheck2 = strstr($email, '.');
$aCheck = is_numeric($age);

// echo var_dump($nCheck, $eCheck1, $eCheck2, $aCheck);

if($nCheck > 3 && $eCheck1 && $eCheck2 && $aCheck) {
    $result = 'Accesso riuscito';
} else {
    $result = 'Accesso negato';
};
?>

<div><?= $result ?></div>