<?php
    include __DIR__ . '/functions.php';
    session_start();
    
    if (isset($_POST["text"])) {
        $_SESSION["user_text"] = $_POST["text"];
    }

    $input_min = 7;
    $input_max = 15;
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
                    {   
                        if ($_SESSION["user_text"] < $input_min || $_SESSION["user_text"] > $input_max)
                        {
                            ?> <h3 class="wrong-choice"><?php echo "Il valore selezionato non rispetta le limitazioni! Riprovare" ?></h3> <?php
                        }
                        else
                        {?>
                            <h4>La tua password di <?php echo $_SESSION["user_text"] ?> caratteri è:</h4>
                            <h3 class="choice"><?php is_set($dev_input, $pwd_chars, 7, 15); ?></h3>

                            <div class="note-container">
                                <h6 class="bottom_note">*Nota: premi F5 per generare una nuova password*</h6>
                                <h5 class="bottom_note">***ATTENZIONE: così facendo perderai l'attuale password!***</h5>
                            </div>
                        <?php 
                        }
                    }
                    elseif (!is_numeric($_SESSION["user_text"])) 
                    { 
                        ?> <h3 class="wrong-choice"><?php echo "Non è stato inserito un valore idoneo! Riprovare" ?></h3> <?php
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