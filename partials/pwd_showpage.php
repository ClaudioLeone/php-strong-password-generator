<?php
    include __DIR__ . '/functions.php';
    session_start();
    $_SESSION["user_text"] = $_POST["text"]
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
            <div class="pwd-container flex f-col f-align-center">
                <?php 
                    if (isset($_SESSION["user_text"]) && is_numeric($_SESSION["user_text"]))
                    {?>
                        <h4>Your generated password, according to your length of choice, is:</h4>
                        <h3 class="choice"><?php is_set($dev_input, $pwd_chars); ?></h3>
                    <?php 
                    }
                    elseif (!is_numeric($_SESSION["user_text"])) 
                    { 
                        ?> <h3 class="wrong-choice"><?php echo "Not a number!" ?></h3> <?php
                    }
                ?>
            </div>

            <form class="form-secondary flex f-justify-center" action="../index.php" method="post">
                <button class="goback-btn" type="submit">INDIETRO</button>
            </form>
        </div>
    </div>
</body>
</html>