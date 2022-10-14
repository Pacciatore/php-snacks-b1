<!-- Snack 5
Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

$classe = [
    [
        'nome' => 'Piero',
        'cognome' => 'Fasulli',
        'voti' => [
            'storia' => 5,
            'matematica' => 6,
            'geografia' => 8,
            'italiano' => 4
        ]
    ],
    [
        'nome' => 'Franco',
        'cognome' => 'Franchi',
        'voti' => [
            'storia' => 10,
            'matematica' => 7,
            'geografia' => 6,
            'italiano' => 5
        ]
    ],
    [
        'nome' => 'Gianpiero',
        'cognome' => 'Pieri',
        'voti' => [
            'storia' => 3,
            'matematica' => 8,
            'geografia' => 8,
            'italiano' => 6
        ]
    ],
    [
        'nome' => 'Alex',
        'cognome' => 'Mengazzi',
        'voti' => [
            'storia' => 10,
            'matematica' => 10,
            'geografia' => 10,
            'italiano' => 10
        ]
    ],
];
?>

<h1>Studenti</h1>

<?php
for ($i = 0; $i < count($classe); $i++) {
    $alunno = $classe[$i];
    $average = array_sum($alunno['voti']) / count($alunno['voti']);
?>

    <div>
        <h2> <?= $alunno['nome'] ?> <?= $alunno['cognome'] ?> </h2>
        <p> <?= round($average) ?> </p>
    </div>

<?php
}

?>