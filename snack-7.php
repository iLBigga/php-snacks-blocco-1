<?php

$studenti = [
        [
            'nome' => 'Mario',
            'cognome' => 'Rossi',
            'voti' => [ 
                'matematica' => 4, 
                'fisica' => 8, 
                'inglese' => 3, 
                'latino' => 7,
            ],

        ],
        [
            'nome' => 'Dario',
            'cognome' => 'Manforti',
            'voti' => [
                'matematica' => 2, 
                'fisica' => 9, 
                'inglese' => 7, 
                'latino' => 3,
                ],
        ],
        [
            'nome' => 'Sara',
            'cognome' => 'Ricci',
            'voti' => [ 
                'matematica' => 8, 
                'fisica' => 10, 
                'inglese' => 3, 
                'latino' => 6,
                ],
        ],
        [
            'nome' => 'Giulia',
            'cognome' => 'Sansone',
            'voti' => [ 
                'matematica' => 7, 
                'fisica' => 6, 
                'inglese' => 3, 
                'latino' => 2,
            ],
        ],
];

?>


<div>
    <ul>
        <?php
           for($i = 0; $i < count($studenti); $i++){
                $name = $studenti[$i]['nome'] . ' ' . $studenti[$i]['cognome'];
                $avarage = round(array_sum($studenti[$i]['voti'])/count($studenti[$i]['voti']));
        ?>
            <li>
                <?php
                    echo "{$name} : {$avarage}"
                ?>
            </li>
        <?php    
           }
        ?>
    </ul>
</div>