<?php
include("../src/customer.php");

if(isset($_GET['customerID'])){
    $customer = new Customer();
    $customerDelete = $customer->deleteCustomer($_GET['customerID']);

    if($customerDelete != true){
        echo "Klant is verwijderd";
        header("Location: client.php");
    } else {
        echo "Klant is niet verwijderd";
    }
}

