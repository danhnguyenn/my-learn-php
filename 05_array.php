<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php 
       $english = [
        1 => 'one',
        2 => 'two',
        3 => 'three',
        4 => 'four',
        5 => 'five',
        6 => 'six'
        ];
        $roll = rand(1, 6);
        echo '<p>You rolled a ' . $english[$roll] . '</p>';
        if ($roll == 6) {
        echo '<p>You win!</p>';
        }
        else {
        echo '<p>Sorry, you didn\'t win, better luck next time!</p>';
        }
    ?>
    <a href=""></a>
</body>
</html>