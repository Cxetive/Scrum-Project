<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Scrum</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <?php
        include("../src/customer.php");

        $customer = new Customer();
        $allCustomers = $customer->getAllCustomers();

        echo "<h1>Klanten</h1>";
        echo "<a href=toevoegen.php>Toevoegen</a>";
        echo "<table border='1'>
        <tr>
            <th>Naam</th>
            <th>Email</th>
            <th>Klus</th>
            <th>Bekijken</th>
            <th>Bewerken</th>
            <th>Verwijderen</th>
        </tr>";

        foreach ($allCustomers as $customer) {
            echo "<tr>";
            echo "<td>" . $customer['voornaam'] . " " . $customer['achternaam'] . "</td>";
            echo "<td>" . $customer['email'] . "</td>";
            echo "<td>" . $customer['klus'] . "</td>";
            echo "<td><a href=detail.php?customerID=" . $customer['id'] . ">Bekijk</a></td>";
            echo "<td><a href=update.php?customerID=" . $customer['id'] . ">Bewerken</a></td>";
            echo "<td><a href=delete.php?customerID=" . $customer['id'] . ">Verwijderen</a></td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </div>
</body>

</html>