<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/bewerk.css">
</head>

<body>
    <?php
    include("../src/customer.php");

    if (isset($_GET['customerID'])) {
        $customer = new Customer();
        $customerData = $customer->getCustomer($_GET['customerID']);
    }

    if (isset($_POST['updateCustomer'])) {

        $customer = new Customer();
        $customer->setVoornaam($_POST['voornaam']);
        $customer->setAchternaam($_POST['achternaam']);
        $customer->setEmail($_POST['email']);
        $customer->setKlus($_POST['klus']);

        if ($customer->updateCustomer($_GET['customerID']) == false) {
            echo "Klant is bijgewerkt";
            header("Location: client.php");
        } else {
            echo "Klant is niet bijgewerkt";
        }
    }

    ?>
    <div class="container">

    
    <form action="#" method="post">
        <label for="voornaam">Voornaam:</label>
        <input type="text" name="voornaam" value="<?php echo $customerData[0]['voornaam']; ?>" />
        <br />
        <label for="achternaam">Achternaam:</label>
        <input type="text" name="achternaam" value="<?php echo $customerData[0]['achternaam']; ?>" />
        <br />
        <label for="email">Email:</label>
        <input type="text" name="email" value="<?php echo $customerData[0]['email']; ?>" />
        <br />
        <label for="klus">Klus:</label>
        <input type="text" name="klus" value="<?php echo $customerData[0]['klus']; ?>" />
        <br />

        <input class="submit" type="submit" name="updateCustomer" />
    </form>
    </div>
</body>

</html>