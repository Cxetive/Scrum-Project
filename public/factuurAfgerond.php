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
    include ("../src/factuur.php");

    if (isset($_GET['verzenden'])) {
        $factuur = new Factuur();
        $factuurData = $factruur->getFactuur($_GET['verzender']);

        echo "<div class='container'>";
        echo "<a href='client.php'>Terug</a>";
        echo "<div class='box'>";
        echo "<p>Verzender:" . $factuur->getVerzender() . " </p>";
        echo "<p>Ontvanger:" . $factuur->getOntvanger() . "</p>";
        echo "<p>bedrag:" . $factuur->getBedrag() . "</p>";
        echo "<p>Afgeronde Klus:" . $factuur->getKlus() . "</p>";
        echo "</div>";
        echo "</div>";
    }

    ?>

</body>

</html>