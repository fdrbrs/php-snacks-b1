<?php

$lista_invitati = [
    'marco',
    'sandra',
    'azelio',
    'giuliana',
    'roberto',
    'sara'
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div> <?php echo in_array($_GET['input'], $lista_invitati) == true ? 'ok' : 'ko' ?></div>
</body>
</html>