<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- TITOLO PAGE -->
    <title>PAGINA 1</title>

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
   
    <div class="my-container bg-success">
        <form class="form d-flex flex-column justify-content-center" action="my-index.php" method="GET">

            <h3 class="p-2 text-danger text-center" for="paragraph">Inserisci una o piu parole:</h3><br>
            <span class="p-2 d-flex justify-content-center">
                <textarea class="p-2" name="paragraph" rows="1" cols="60"></textarea><br><br>
            </span>
            <h3 class="text-center text-danger" for="word">Parola da censurare:</h3>
            <span class="p-2 d-flex justify-content-center">
                <input class="w-25" type="text" name="word"><br><br>
            </span>
            <span class="d-flex justify-content-center">
                <button type="submit" value="Censura"> Censura la parola</button>
            </span>

        </form>
    </div>



    <!-- JS SCRIPT.JS -->
    <script type="text/javascript" src="js/script.js"></script>

    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>