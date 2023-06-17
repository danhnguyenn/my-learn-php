<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable PHP</title>
</head>
<body>
    <?php 
        $testVariable = 3;
        echo $testVariable;
        $testVariable = 'Hello World';
        echo '<br>';
        echo $testVariable;
        $randomNumber = rand(1,10);
        echo '<br>';
        echo $randomNumber;
    ?>
</body>
</html>