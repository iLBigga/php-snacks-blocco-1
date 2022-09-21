<?php

$partite = [
    [
        'home' => [
            'name' => 'Los Angeles Lakers',
            'score' => 74,
        ],
        'guest' => [
            'name' => 'Chicago Bulls',
            'score' => 74,
        ],  
    ],
    [
        'home' => [
            'name' => 'Miami Heat',
            'score' => 74,
        ],
        'guest' => [
            'name' => 'Boston Celtics',
            'score' => 74,
        ],    
    ],
    [
        'home' => [
            'name' => 'Toronto Raptors',
            'score' => 74,
        ],
        'guest' => [
            'name' => 'Brooklyn Nets',
            'score' => 74,
        ],  
    ],
    [
        'home' => [
            'name' => 'Cleveland Cavaliers',
            'score' => 74,
        ],
        'guest' => [
            'name' => 'Detroit Pistons',
            'score' => 74,
        ],  
    ],
];


?>


<ul>
    <?php
        for($i = 0; $i < count($partite); $i++) {
            $match = $partite[$i]['home']['name'] . ' - ' . $partite[$i]['guest']['name'];
            $score = $partite[$i]['home']['score'] . ' - ' . $partite[$i]['guest']['score'];
            ?> 
                <li>
                    <?php 
                        echo "{$match} | {$score}" 
                    ?>
                </li>
            <?php
        }
    ?>
</ul>