<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factuur maken</title>
    <link rel="stylesheet" href="styles/factuur.css">
</head>

<body>
    <div class="container">
        <h1>Factuur aanmaken</h1>
        <form method="GET">
            <input type="text" name="verzender" id="" placeholder="verzender">
            <input type="text" name="ontvanger" id="" placeholder="ontvanger">
            <input type="text" name="bedrag" id="" placeholder="bedrag">
            <input type="text" name="klus" id="" placeholder="klus">
            <input type="submit" value="Verzenden" name="verzenden">
        </form>
    </div>

    <?php
    if (isset($_GET['verzenden'])) {
        include ("../src/factuur.php");

        $newFactuur = new Factuur();
        $newFactuur->setVerzender($_GET['verzender']);
        $newFactuur->setOntvanger($GET['ontvanger']);
        $newFactuur->setBedrag($_GET['bedrag']);
        $newFactuur->setKlus($_GET['afgerondeKlus']);

        if ($newFactuur->saveFactuur() == false) {
            header("Location: factuurAfgerond.php");
        } else {
            echo "Factuur is niet opgeslagen";
        }

    }
    ?>

</body>

</html>