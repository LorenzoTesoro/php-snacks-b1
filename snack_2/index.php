<?php

/* ## Snack 2

Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

*/

var_dump($_GET);

    if(empty($_GET)){
        echo 'compila il form';
    } else if((strlen($_GET['name']) > 3) && (str_contains($_GET['mail'], '.') && str_contains($_GET['mail'], '@')) && (is_numeric($_GET['age']))){
        echo 'Accesso riuscito';
    } else{
        echo 'Accesso negato';
    }


?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack_2</title>
</head>
<body>
    <form action="index.php" method="get">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name='name'>
        </div>
        <div>
            <label for="age">Age:</label>
            <input type="number" id="age" name='age'>
        </div>
        <div>
            <label for="mail">Mail:</label>
            <input type="mail" id="mail" name='mail'>
        </div>
    </form>
    <button type='submit'>Invia</button>

</body>
</html>