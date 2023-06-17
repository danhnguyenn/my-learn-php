<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introducing PHP</title>
</head>
<body>
    <p>Generating a random number between 1 and 
        <?php
            echo rand(1,10);
        ?>
    </p>
    <p><?php echo 'This iss a <strong>test</strong>';?></p>
    <?php 
        echo '<a href="https://www.google.com/">Navigate Google</a>';
    ?>
</body>
</html>