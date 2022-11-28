<?php

/* ## Snack 1

Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

Olimpia Milano - Cantù | 55-60 */

$games = [
    [
        'nome_team' => 'Lakers', 
        'guest_team' => 'Chicago',
        'home_points' => 10,
        'guest_points' => 5
    ],
    [
        'nome_team' => 'Lakers1', 
        'guest_team' => 'Chicago1',
        'home_points' => 20,
        'guest_points' => 25
    ], 
    [
        'nome_team' => 'Lakers2', 
        'guest_team' => 'Chicago2',
        'home_points' => 15,
        'guest_points' => 5
    ],
];

var_dump($games);
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
    <ul>
        <?php foreach ($games as $game) : ?> 
         <li> <?php echo $game['home_team'] . '-' $game['guest_team'] ?> | <?php echo $game['home_points'] . '-' . $game['guest_points']?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>