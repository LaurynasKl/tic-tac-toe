<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tic Tac Toe</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        background-color: #f5f5f5;
    }

    h1 {
        margin-bottom: 20px;
        color: #333;
    }

    .grid-container {
        display: grid;
        grid-template-columns: repeat(3, 100px);
        grid-template-rows: repeat(3, 100px);
        gap: 10px;
    }

    .grid-container form {
        margin: 0;
    }

    .grid-container button {
        width: 100px;
        height: 100px;
        font-size: 2rem;
        cursor: pointer;
        border: 2px solid #333;
        background-color: #fff;
        transition: background-color 0.2s, transform 0.1s;
    }

    .grid-container button:hover {
        background-color: #e0e0e0;
        transform: scale(1.05);
    }

    .grid-container button:disabled {
        background-color: #ccc;
        cursor: not-allowed;
    }

    /* Reset mygtukas pilnai po lenta */
    .grid-container form:last-child button {
        grid-column: 1 / 4;
        height: 40px;
        font-size: 1rem;
        background-color: #ff4d4d;
        color: #fff;
        border: none;
        border-radius: 5px;
    }

    .grid-container form:last-child button:hover {
        background-color: #e60000;
    }
</style>

</head>

<body>
    <!-- <label for="playerOne">Player one</label>
    <input type="text" id="playerOne">
    <label for="playerTwo">Player two</label>
    <input type="text" id="playerTwo"> -->

    <div>
        <h1><?= $winner ?> </h1>
    </div>
    <div class="grid-container">
        <form method="post"><button type="submit" value="0" name="move"><?= $_SESSION['board'][0] ?></button></form>
        <form method="post"><button type="submit" value="1" name="move"><?= $_SESSION['board'][1] ?></button></form>
        <form method="post"><button type="submit" value="2" name="move"><?= $_SESSION['board'][2] ?></button></form>
        <form method="post"><button type="submit" value="3" name="move"><?= $_SESSION['board'][3] ?></button></form>
        <form method="post"><button type="submit" value="4" name="move"><?= $_SESSION['board'][4] ?></button></form>
        <form method="post"><button type="submit" value="5" name="move"><?= $_SESSION['board'][5] ?></button></form>
        <form method="post"><button type="submit" value="6" name="move"><?= $_SESSION['board'][6] ?></button></form>
        <form method="post"><button type="submit" value="7" name="move"><?= $_SESSION['board'][7] ?></button></form>
        <form method="post"><button type="submit" value="8" name="move"><?= $_SESSION['board'][8] ?></button></form>

        <form method="post">
            <button name="reset" type="submit" value="reset">Reset</button>
        </form>

    </div>

</body>

</html>