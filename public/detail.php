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
    include("../src/customer.php");

    if (isset($_GET['customerID'])) {
        $customer = new Customer();
        $customerData = $customer->getCustomer($_GET['customerID']);
    }

    ?>
<div class="container">
    <a href="index.php">Terug</a>
    <div class="box">
    <h1>Klant: <?php echo $customerData[0]['voornaam'] . " " . $customerData[0]['achternaam']; ?></h1>
    <p>Email: <?php echo $customerData[0]['email']; ?></p>
    <p>Klus: <?php echo $customerData[0]['klus']; ?></p>
    </div>
</div>

</body>

</html>