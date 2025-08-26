<?php

session_start();

require('functions.php');


if (!isset($_SESSION['board'])) {
    $_SESSION['board'] = ['', '', '', '', '', '', '', '', ''];
    $_SESSION['playerTurn'] = 'X';
}

$reset = $_POST['reset'] ?? '';
if ($reset) {
    session_destroy();
    $_SESSION['board'] = ['', '', '', '', '', '', '', '', ''];
}

$board = $_SESSION['board'];
$playerTurn = $_SESSION['playerTurn'];

$turn = $_POST['move'] ?? '';

foreach ($board as $key => $value) {
    if ($key == $turn && $value === '') {
        $_SESSION['board'][$turn] = $playerTurn;
        if ($playerTurn === 'X') {
            $_SESSION['playerTurn'] = 'O';
        } else {
            $_SESSION['playerTurn'] = 'X';
        }
    }
}


require('rules.php');
require ('view/index.view.php');
