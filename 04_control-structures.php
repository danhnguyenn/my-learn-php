<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Structures</title>
</head>
<body>
    
    <?php 
    // if - else
    //    $roll1 = rand(1, 6);
    //    $roll2 = rand(1, 6);
    //    echo '<p>You rolled a ' . $roll1 . ' and a ' . $roll2 . '</p>';
    //    if ($roll1 == 6 || $roll2 == 6) {
    //     echo '<p>You win!</p>';
    //    }
    //    else {
    //     echo '<p>Sorry, you didn\'t win. Better luck next time!</p>';
    //    }
    //     echo '<p>Thanks for playing</p>';

    // for
    // for($count = 1; $count <= 10; $count++){
    //     $roll1 = rand(1, 6);
    //     $roll2 = rand(1, 6);
    //    echo '<p>You rolled a ' . $roll1 . ' and a ' . $roll2 . '</p>';
    //    if ($roll1 == 6 || $roll2 == 6) {
    //     echo '<p>You win!</p>';
    //    }
    //    else {
    //     echo '<p>Sorry, you didn\'t win. Better luck next time!</p>';
    //    }
    //     echo '<p>Thanks for playing</p>';
    // }

    // while
    $count = 0;
    while($count <= 10){
        echo $count . '<br>';
        $count++;
    }

    $roll = 0;
    while($roll != 6){
        $roll = rand(1, 6);
        echo '<p>You rolled a ' . $roll . '</p>';
        if ($roll == 6) {
            echo '<p>You win!</p>';
        }
        else {
            echo '<p>Sorry, you didn\'t win, better luck next time!</p>';
        }
    }
    ?>

    <?php 
        // Challenge 1: print all the odd (số lẻ) numbers from 21 to 99
        // for($i = 21; $i <= 99; $i++){
        //    if($i % 2 != 0)  echo $i . ' ';
        // }

        // echo '<br>';

        // Challenge 2: print the nine times table up to 12 x 9 ( 9 18 27 …etc.) without using the multiplication operator ( * ) or an if statementz
        // for($i = 1; $i <= 12; $i++){
        //     $result = 0;

        //     for($j = 0; $j < $i; $j++){
        //         $result += 9;
        //     }

        //     echo $result . ' ';
        // }

        // echo '<br>';

        // Challenge 3: print the nine times table in this format
        // for($i = 1; $i <= 10; $i++){
        //     $result = $i * 9;
        //     echo "9 x " . $i . " = " . $result . '<br>';
        // }
    ?>
</body>
</html>