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
            $factuur = new Factuur();
            $factuurData = $factuur->getFactuur($_GET['verzender']);

            echo "<div class='container'>";
            echo "<a href='client.php'>Terug</a>";
            echo "<div class='box'>";
            echo "<p>Verzender: " . $factuurData[0]['verzender'] . " </p>";
            echo "<p>Ontvanger: " . $factuurData[0]['ontvanger'] . "</p>";
            echo "<p>bedrag: " . $factuurData[0]['bedrag']. "</p>";
            echo "<p>Afgeronde Klus: " . $factuurData[0]['afgerondeklus'] . "</p>";
            echo "</div>";
            echo "</div>";
        

        ?>
</body>

</html>