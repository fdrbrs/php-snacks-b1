<!-- 
Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
 -->

 <?php

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
 </body>
 </html>