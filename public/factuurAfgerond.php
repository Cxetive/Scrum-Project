<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/detail.css">
    <title>Document</title>
</head>

<body>
    <?php
    include("../src/factuur.php");

    if (isset($_POST['verzenden'])) {
        include("factuur.php");
        $factuur = new Factuur();
        $factuurData = $factruur->getFactuur($_POST['verzender']);
    }

    ?>
<div class="container">
    <a href="client.php">Terug</a>
    <div class="box">
    <h1>Verzender: <?php echo $factuurData[0]['verzender']; ?></h1>
    <p>Ontvanger: <?php echo $factuurData[0]['ontvanger']; ?></p>
    <p>bedrag: <?php echo $factuurData[0]['bedrag']; ?></p>
    </div>
    </div>

</body>

</html>