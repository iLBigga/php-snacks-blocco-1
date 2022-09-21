<?php

$studenti = [
    'alunno1' => [
        'name' => 'Mario',
        'cognome' => 'Rossi',
        'voti' => [ 
            'matematica' => 4, 
            'fisica' => 8, 
            'inglese' => 3, 
            'latino' => 7,
        ],
    ],
    'alunno2' => [
        'name' => 'Dario',
        'cognome' => 'Manforti',
        'voti' => [
            'matematica' => 2, 
            'fisica' => 9, 
            'inglese' => 7, 
            'latino' => 3,
         ],
    ],
    'alunno3' => [
        'name' => 'Sara',
        'cognome' => 'Ricci',
        'voti' => [ 
            'matematica' => 8, 
            'fisica' => 10, 
            'inglese' => 3, 
            'latino' => 6,
         ],
    ],
    'alunno4' => [
        'name' => 'Giulia',
        'cognome' => 'Sansone',
        'voti' => [ 
            'matematica' => 7, 
            'fisica' => 6, 
            'inglese' => 3, 
            'latino' => 2,
         ],
    ],
    
];

echo var_dump($studenti);


?>


