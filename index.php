<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/utilities.css">
</head>

<body>
    <header>
        <div class="top-text-container">
            <h1>Strong Password Generator</h1>
            <h2>Genera una password sicura</h2>
        </div>
    </header>

    <main>
        <div class="form-container flex f-col f-justify-between">
            <form class="form-primary flex f-justify-between" action="" method="get">
                <label for="text">Lunghezza pwd da generare:</label>

                <div class="inputs flex f-align-center f-justify-between">
                    <input type="text" name="text" id="text">
                    <input class="btn-reset" type="reset" value="❌">
                </div>
            </form>
        </div>
    </main>
</body>
</html>