<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caps Store Produção</title>

    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!--Css-->
    <link rel="stylesheet" href="css/styles.css">

    <!--Css-->
    <script src="js/script.js" defer></script>

</head>
<body>
    <div class="container">
        <?php require_once("models/menu.php"); 
              require_once("models/table.php");
              require_once("models/modalAdicionar.php");
              require_once("models/modalData.php");
              require_once("models/modalBuscar.php");
        ?>
    </div>
</body>
</html>