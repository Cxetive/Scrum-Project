<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/toevoegen.css">
</head>

<body>
    <div class="container">

   
    <form action="#" method="post">
        <label for="voornaam">Voornaam:</label>
        <input type="text" name="voornaam" />
        <br />
        <label for="achternaam">Achternaam:</label>
        <input type="text" name="achternaam" />
        <br />
        <label for="email">email:</label>
        <input type="text" name="email" />
        <br />
        <label for="klus">klus:</label>
        <input type="text" name="klus" />
        <br />
        
        <br />

        <input type="submit" name="saveCustomer" />
    </form>
    </div>

    <?php
    include("../src/customer.php");

    if (isset($_POST['saveCustomer'])) {

        $newCustomer = new Customer();
        $newCustomer->setVoornaam($_POST['voornaam']);
        $newCustomer->setAchternaam($_POST['achternaam']);
        $newCustomer->setEmail($_POST['email']);
        $newCustomer->setKlus($_POST['klus']);

        if ($newCustomer->saveCustomer() == false) {
            echo "Klant is opgeslagen";
            header("Location: client.php");
        } else {
            echo "Klant is niet opgeslagen";
        }
    }
    ?>
</body>

</html>