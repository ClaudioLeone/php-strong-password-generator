<?php
    include __DIR__ . '/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Boolean/php-strong-password-generator/CSS/style.css">
    <link rel="stylesheet" href="/Boolean/php-strong-password-generator/CSS/utilities.css">
    <title>Your PWD</title>
</head>
<body>
    <div class="user-choice-container flex f-align-center f-justify-center">
        <div class="user-choice">
            <h4>Your generated password, according to your length of choice, is:</h4>
            <div class="pwd-container">
                <?php 
                    if (isset($_POST["text"]) && is_numeric($_POST["text"]))
                    {
                        is_set($dev_input, $pwd_chars);
                    }
                    elseif (!is_numeric($_POST["text"])) 
                    { 
                        ?> <h3 class="choice"><?php echo "Not a number!" ?></h3> <?php
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>