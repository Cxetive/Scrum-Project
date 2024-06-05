<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Scrum</title>
    <link rel="stylesheet" href="styles/index.css">


</head>
<style>

.container {
    align-items: space-between;
}

a[class="zoek"] {
    margin: 0px 10px 0px 10px;
}

input {
    padding: 10px 20px;
    margin-left: 10px;
}

</style>

<body>

    <h1>Overzicht Klanten</h1>
    <div class="container">
        <?php
        include("../src/customer.php");

        session_start();
        $customer = new Customer();
        $customerSearch = $customer->getCustomerSearch($_SESSION["search"]);

        // echo "<h1>Overzicht klanten</h1>";
        echo "<div class='zoeken'>";
        echo "<input type='text' placeholder='voor- achternaam/email'>";
        echo "<a class='zoek' href='zoek.php'>Zoek een klant</a>";
        echo "<a class='overview' href='client.php'>Terug naar overzicht</a>";
        echo "</div>";
        echo "<table border='0' border-spacing='10px'>
        <tr>
            <th>Naam</th>
            <th>Email</th>
            <th>Klus</th>
            <th>Bekijken</th>
            <th>Bewerken</th>
            <th>Verwijderen</th>
        </tr>";

        foreach ($customerSearch as $customer) {
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