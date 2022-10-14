<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
 Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa
  e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60 -->

<?php

$matches = [
    [
        'home' => 'Olimpia Milano',
        'away' => 'Cantù',
        'homeScore' => 55,
        'awayScore' => 60
    ],
    [
        'home' => 'Enel Brindisi',
        'away' => 'Juventude',
        'homeScore' => 75,
        'awayScore' => 50
    ],
    [
        'home' => 'Fortitudo Bologna',
        'away' => 'Peschici BC',
        'homeScore' => 60,
        'awayScore' => 30
    ]
];

?>

<h1>BASKET MATCHES</h1>

<?php

for ($i = 0; $i < count($matches); $i++) {
    $match = $matches[$i];

?>

    <div>

        <p> <?= $match['home'] ?> - <?= $match['away'] ?> | <?= $match['homeScore'] ?> - <?= $match['awayScore'] ?> </p>

    </div>

<?php

}

?>