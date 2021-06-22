<!-- 
Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60

Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
 -->



 <?php
    /* Snack 1 */
    $partite = [
        [
            'squadra_casa' => 'Virtus Bologna',
            'squadra_ospite' => 'V.L. Pesaro',
            'punti_casa' => 31,
            'punti_ospite' => 60,
        ],
        [
            'squadra_casa' => 'Dinamo Sassari',
            'squadra_ospite' => 'New Basket Brindisi',
            'punti_casa' => 56,
            'punti_ospite' => 21,
        ],
        [
            'squadra_casa' => 'Itala Gradisca',
            'squadra_ospite' => 'Universo Treviso',
            'punti_casa' => 90,
            'punti_ospite' => 12,
        ],
        [
            'squadra_casa' => 'GUF Firenze',
            'squadra_ospite' => 'Napoli Basket',
            'punti_casa' => 55,
            'punti_ospite' => 86,
        ],
        [
            'squadra_casa' => 'Orlandina',
            'squadra_ospite' => 'Teramo Basket',
            'punti_casa' => 63,
            'punti_ospite' => 56,
        ],
        [
            'squadra_casa' => 'Stella Azzurra',
            'squadra_ospite' => 'Reggiana',
            'punti_casa' => 63,
            'punti_ospite' => 83,
        ],
        [
            'squadra_casa' => 'Scandone Avellino',
            'squadra_ospite' => 'Reyer Venezia',
            'punti_casa' => 75,
            'punti_ospite' => 73,
        ],

    ];

    /* Snack 2 */
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    if (strlen($name) > 3 && strpos($mail, '.') && strpos($mail, '@') && is_numeric($age)) {
        $access = 'Accesso riuscito';
    } else {
        $access = 'Accesso negato';
    };

    /* Snack 3 */

    $posts = [

        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];

    $date_keys = array_keys($posts);

    /* Snack 4 */

    $students = [
        [
            'name' => 'Luca',
            'lastname' => 'Petrino',
            'grades' => [9,2,5,6,3,6]
        ],
        [
            'name' => 'Maria',
            'lastname' => 'Giovannini',
            'grades' => [8,6,8,1,4,6]
        ],
        [
            'name' => 'Albert',
            'lastname' => 'Orthanc',
            'grades' => [3,7,8,8,9,5]
        ],
        [
            'name' => 'Jonathan',
            'lastname' => 'Joestar',
            'grades' => [10,8,7,1,6,10]
        ],
        [
            'name' => 'Paola',
            'lastname' => 'Ciotti',
            'grades' => [6,7,5,3,8,8]
        ],
    ];
 
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP Snack B1</title>
 </head>
 <body>
        <h1>Snack 1</h1>
        <ul> 
            <?php 
                for ($i=0; $i < count($partite); $i++) { 
                    echo '<li>' . $partite[$i]['squadra_casa'] . ' - ' . $partite[$i]['squadra_ospite'] . ' | ' . $partite[$i]['punti_casa'] . '-' . $partite[$i]['punti_ospite'] . '</li>';
                }
            ?>
        </ul>

        <h1>Snack 2</h1>
        <div> <?php echo $access ?></div>

        <h1>Snack 3</h1>
        <div>
        <?php

            foreach ($posts as $date) {
                echo '<h3>'.$date_keys[0].'</h3>';
                foreach ($date as $post) {
                    echo '<div>'.'Title: '.$post['title'].'</div>'.
                    '<div>'.'Author: '.$post['author'].'</div>'.
                    '<div>'.'Text: '.$post['text'].'</div>'.'<br>';
                }
            }

            /* for ($i=0; $i < count($posts) ; $i++) { 
                echo '<div>'.$date_keys[$i].'</div>';
            } */
        ?>
        </div>

        <h1>Snack 4</h1>

        <div>
        <?php

            foreach ($students as $student) {
                echo '<div>'.'<span>'.'Studente: '.'</span>'.'<strong>'.$student['name'].' '.$student['lastname'].'</strong>'.'</div>'.
                '<span>Media: </span>'.'<strong>'.round(array_sum($student['grades']) / count($student['grades']), 2).'</strong>'
                ;
            }
        ?>
        </div>
 </body>
 </html>