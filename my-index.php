<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TITOLO PAGE -->
    <title>MY-PERSONAL-WB</title>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- FONT GOOGLE -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <!-- CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    
</head>
<body id="debug">

    <?php 
    
            //VARIABILI
            $paragraph = $_GET["paragraph"];
            $wordToCensor = $_GET["word"];
            //----------------------------------------------------
            // PAROLA INSERITA
            echo "<h2>Parola Inserita:</h2>";
            echo "<p>" . $paragraph . "</p>";
            echo "<p>Lunghezza: " . strlen($paragraph) . " caratteri</p>";
            //VARIABILE PER CENSURARE
            $censoredParagraph = str_replace($wordToCensor, str_repeat('*', strlen($wordToCensor)), $paragraph);

            //PAROLA DA CENSURARE
            echo "<h2>Parola Censurata:</h2>";
            echo "<p>" . $censoredParagraph . "</p>";
            echo "<p>Lunghezza: " . strlen($censoredParagraph) . " caratteri e " . strlen($wordToCensor) . " parole censurate</p>";
        ?>
    </div>


    <!-- JS SCRIPT.JS -->
    <script type="text/javascript" src="js/script.js"></script>

    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>