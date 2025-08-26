<?php

$rules = require ('rulesData.php');

$winner = null;

foreach ($rules as $combo) {
    if (
        $_SESSION['board'][$combo[0]] !== '' &&
        $_SESSION['board'][$combo[0]] === $_SESSION['board'][$combo[1]] &&
        $_SESSION['board'][$combo[1]] === $_SESSION['board'][$combo[2]]
    ) {
        $winner = $_SESSION['board'][$combo[0]];
    }
}

if ($winner) {
    $winner = "The winner: {$winner}";
} else if (!in_array('', $_SESSION['board'])) {
    $winner =  'DRAW';
}
