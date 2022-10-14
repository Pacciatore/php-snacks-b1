<!-- Snack 2
Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) che name sia più lungo 
di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

$name = '';
$mail = '';
$age = '';

if (isset($_GET['name'])) {
    $name = $_GET['name'];
};

if (isset($_GET['mail'])) {
    $mail = $_GET['mail'];
};

if (isset($_GET['age'])) {
    $age = $_GET['age'];
};

?>

<h1>Accesso utente</h1>

<?php

$nameLength = strlen($name);

$validMail = strpos($mail, '@') > 0 && strpos($mail, '.') > 0;

$isInt = is_numeric($age);

if ($nameLength > 3 && $validMail && $isInt) {
?>
    <p>Accesso riuscito</p>
<?php
} else {
?>
    <p>Accesso negato</p>
<?php
}

?>