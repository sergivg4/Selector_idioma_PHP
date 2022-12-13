<?php

// Idioma del navegador per defecte
$defaultLang = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);

$helloString = "";

// Si la variable "lang" no hi és declarada, es posarà l'idioma del navegador
if(!isset($_GET['lang'])){
    header("Location:?lang=" . $defaultLang);
}

// Canvi d'idioma en la variable "helloString"
switch ($_GET['lang']) {
    case "es":
        $helloString = "¡Hola mundo!";
    break;
    case "ca":
        $helloString = "Hola món!";
    break;
    case "en":
        $helloString = "Hello World!";
    break;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Prova tècnica IThinkUPC</title>
</head>

<body>
    <div class="container d-flex flex-column align-items-center mt-5">

        <h2>Selector de idioma</h2>

        <div class="m-3">
            <a href="?lang=es" class="btn btn-info">Es</a>
            <a href="?lang=ca" class="btn btn-info">Ca</a>
            <a href="?lang=en" class="btn btn-info">En</a>
        </div>

        <div>
            <p>
                <b>Idioma:</b>
                <?php echo $_GET['lang']; ?>
            </p>
        </div>

        <div>
            <h3><b><?php echo $helloString; ?><b></h3>
        </div>

    </div>
</body>

</html>