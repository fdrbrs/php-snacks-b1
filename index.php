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

    /* Snack 7 */

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
    
    /* Snack 5 */

    $lorem = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit repudiandae obcaecati accusamus sapiente nihil quaerat eveniet a quos facilis ex temporibus, asperiores non, sequi deserunt cum et accusantium libero tempora architecto saepe velit ad autem. Voluptatum provident esse, accusamus reprehenderit totam similique vel repellat ea. Magnam totam iste voluptates in enim suscipit impedit atque corporis provident dolorem, delectus, at id facilis ullam officia quo, earum aliquam! Ex et sunt rem quisquam? Quae beatae esse voluptatem voluptates! Ex fuga cum laboriosam eum illum quaerat, veniam ratione illo obcaecati veritatis nisi porro eligendi ipsam deleniti explicabo magnam cumque! Dolore doloribus numquam dolores aperiam labore, quis accusamus, ullam eos placeat distinctio excepturi. Doloribus illo voluptate in fugiat dolorum necessitatibus eveniet quis quas perspiciatis sint, nihil dolores accusantium alias laborum hic porro tempora dolore possimus consequatur minus placeat! Similique, facilis! Harum pariatur nihil distinctio optio id hic voluptate cum rerum iure corrupti voluptates explicabo debitis nobis obcaecati, magni ipsum ullam tenetur ipsa, expedita non dolore velit a! Praesentium optio possimus, dolore aspernatur placeat assumenda voluptates veniam eum a consequatur quam quasi eveniet laborum, incidunt et? Veritatis ipsam dolores doloremque consequatur, dolorum tenetur earum accusantium illo at repellat eveniet quisquam esse blanditiis ea sapiente nulla numquam eos delectus! Illo et aut laborum possimus cumque commodi dolorum doloribus vitae laboriosam, eligendi maiores pariatur quos alias consequuntur. Voluptatem cupiditate velit facilis accusantium nesciunt fugit, tenetur ex modi, laboriosam culpa voluptate voluptates cumque voluptas quas. Necessitatibus, facere eum. Harum cum placeat culpa dolorem, numquam possimus. Ipsa ab animi nisi maxime voluptatum modi, perspiciatis dolore aperiam fugit, optio quibusdam, fuga sed molestias inventore laudantium non laborum provident cum quis rem praesentium hic voluptatem! Similique hic exercitationem deserunt quas, numquam delectus impedit commodi, in perferendis voluptatum ab consequatur velit dolorem deleniti saepe ullam? Incidunt cumque velit quasi provident vero beatae ex tenetur vitae suscipit. Laborum ratione dicta velit nesciunt, consequuntur ad? Voluptas, iste dolores similique tempore, placeat reprehenderit quisquam, error maiores esse voluptatem sed hic. Cumque provident, ut facilis eligendi eius fugiat ipsum saepe asperiores magni quas vel molestias quam amet. Aut, totam sed! Rerum aperiam sit temporibus consequuntur natus, ducimus maxime placeat ad? In temporibus cum veritatis aspernatur voluptatibus alias. Enim, quam deleniti molestias dolor, harum magnam vitae eveniet earum numquam, reiciendis blanditiis delectus facilis iure cumque officiis labore consequatur? Quae temporibus est illo sit, explicabo officiis veritatis dolores quo odio itaque necessitatibus provident aspernatur non blanditiis sequi laborum similique? Incidunt ipsam, eius aperiam eum itaque, nam, porro commodi ullam dolorum doloribus delectus reprehenderit vero deserunt atque excepturi voluptas similique quos fuga. Sapiente aperiam nemo, distinctio repellat placeat quaerat, enim, maxime explicabo voluptate atque veniam? Consequatur, ducimus! Temporibus ipsam labore, laudantium ducimus expedita ut nostrum obcaecati ex maxime consequuntur non, beatae exercitationem quas modi blanditiis perferendis reiciendis aperiam autem. Veniam dolor enim modi optio ratione neque natus sunt aliquam a cupiditate dolores pariatur eaque alias fugit blanditiis qui perferendis, expedita ab magnam voluptates atque molestiae sed! Unde distinctio minus ratione. Beatae, in explicabo cumque dolor ullam nobis minima nulla.';

    $lorem_array = explode('.', $lorem);

    /* Snack 6 */

    $random_array = [];

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

    /* Snack 4 */


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

        <?php
        
        while (count($random_array) < 15) {
            $myNewInt = rand(1,100);
            if (in_array("$myNewInt", $random_array) == false) {
                $random_array[] = $myNewInt;
            }
        }

        foreach ($random_array as $number) {
            echo $number.' ';
        }
        
        ?>

        <h1>Snack 5</h1>

        <h3>Testo Intero</h3>

        <p><?php echo $lorem ?></p>

        <h3>Testo diviso in paragrafi</h3>

        <?php

        foreach ($lorem_array as $paragraph) {
            echo '<p>'.$paragraph.'</p>';
        }

        ?>

        

        <h1>Snack 6</h1>

        <div style="background-color: grey; height: 100px">
            <h3>Teachers</h3>
            <?php
            echo $db['teachers'][0]['name'].' '.$db['teachers'][0]['lastname'].'<br>'.
            $db['teachers'][1]['name'].' '.$db['teachers'][1]['lastname']
            ?>
        </div>

        <div style="background-color: lightgreen; height: 100px">
            <h3>PM</h3>
            <?php
            echo $db['pm'][0]['name'].' '.$db['pm'][0]['lastname'].'<br>'.
            $db['pm'][1]['name'].' '.$db['pm'][1]['lastname']
            ?>
        </div>

        <h1>Snack 7</h1>

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

 <!-- <?php ?> -->