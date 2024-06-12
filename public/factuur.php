<?php
    if(isset($_POST['verzenden']))
    {
        include("../src/factuur.php");

        $newFactuur = new Factuur();
        $newFactuur->setVerzender($_POST['verzender']);
        $newFactuur->setOntvanger($_POST['ontvanger']);
        $newFactuur->setBedrag($_POST['bedrag']);
        $newFactuur->setKlus($_POST['klus']);

        header("Location: factuurAfgerond.php");
    }
?>