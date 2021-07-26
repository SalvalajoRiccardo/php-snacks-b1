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


// Snack 2
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

if (empty($_GET['name']) || !isset($_GET['name']) || strlen($_GET['name']) < 4) {
    $stringaName = 'errore';
    var_dump($_GET['name']);
} else {
    $stringaName = $_GET['name'];
};

if (empty($_GET['mail']) || !isset($_GET['mail']) || !strpos($_GET['mail'], '@') || !strpos($_GET['mail'], '.')) {
    $stringaMail = 'errore';
} else {
    $stringaMail = $_GET['mail'];
};

if (empty($_GET['eta']) || !isset($_GET['eta']) || !is_numeric($_GET['eta']) ) {
    $stringaEta = 'errore';
} else {
    $stringaEta = $_GET['eta'];
}

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
    <h2>snack 1</h2>
    <ul>
    <?php for ($i=0; $i < $lunghezza ; $i++) { ?>
        <li><?php echo $calendar[$i]['nomeC'] . ' - ' . $calendar[$i]['nomeS'] ?> <?php echo $calendar[$i]['puntiC'] . ' | ' . $calendar[$i]['puntiS']; ?></li>
    <?php } ?>
    </ul>

    <h2>snack 2</h2>

    <h3>Nome: <?php echo $stringaName; ?> </h3>
    <h3>Mail: <?php echo $stringaMail; ?> </h3>
    <h3>Età: <?php echo $stringaEta; ?> </h3>
</body>
</html>