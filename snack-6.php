<?php

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

$teachers = $db['teachers'];
$pm = $db['pm'];

// echo var_dump($db);

?>

<div style="background-color: grey; width: 300px; padding: 10px;">
    <div>
        <?php
            for ($i = 0; $i < count($db); $i++) {
                $teachersName = $teachers[$i]['name'] . ' ' . $teachers[$i]['lastname'];
        ?>
            <div>
                <?php
                    echo $teachersName
                ?>
            </div>
        <?php
            }
        ?>
    </div>
</div>


<div style="background-color: green; width: 300px; padding: 10px;">
    <div>
        <?php
            for ($i = 0; $i < count($db); $i++) {
                $pmName = $pm[$i]['name'] . ' ' . $pm[$i]['lastname'];
        ?>
            <div>
                <?php
                    echo $pmName
                ?>
            </div>
        <?php
            }
        ?>
    </div>
</div>