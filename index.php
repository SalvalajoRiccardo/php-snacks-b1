<?php
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
// Olimpia Milano - Cantù | 55-60

$calendar = [
    [
        'nomeC' => 'Chicago Bulls',
        'nomeS' => 'Toronto Raptors',
        'puntiC' => '78',
        'puntiS' => '56',
    ],
    [
        'nomeC' => 'Los Angeles Lakers',
        'nomeS' => 'Detroit Pistons',
        'puntiC' => '89',
        'puntiS' => '93',
    ],
    [
        'nomeC' => 'Orlando Magic',
        'nomeS' => 'Houston Rockets',
        'puntiC' => '77',
        'puntiS' => '45',
    ]
    
];

$lunghezza = count($calendar);


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
    <?php for ($i=0; $i < $lunghezza ; $i++) { ?>
        <li><?php echo $calendar[$i]['nomeC'] . ' - ' . $calendar[$i]['nomeS'] ?> <?php echo $calendar[$i]['puntiC'] . ' | ' . $calendar[$i]['puntiS'] ?></li>
    <?php } ?>
    </ul>
</body>
</html>