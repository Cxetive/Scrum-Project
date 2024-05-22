<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include("../src/customer.php");

    if (isset($_GET['customerID'])) {
        $customer = new Customer();
        $customerData = $customer->getCustomer($_GET['customerID']);
    }

    ?>

    <h1>Klant: <?php echo $customerData[0]['voornaam'] . " " . $customerData[0]['achternaam']; ?></h1>
    <p>Email: <?php echo $customerData[0]['email']; ?></p>
    <p>Klus: <?php echo $customerData[0]['klus']; ?></p>
    <a href="update.php?customerID=<?php echo $customerData[0]['customerId']; ?>">Bewerken</a></br>
    <a href="delete.php?customerID=<?php echo $customerData[0]['customerId']; ?>">Verwijderen</a>

</body>

</html>