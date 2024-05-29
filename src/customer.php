<?php
include_once ('database.php');

class Customer extends Database
{
    private $id;
    private $voornaam;
    private $achternaam;
    private $email;
    private $klus;

    // Get all customers
    public function getAllCustomers()
    {
        $query = "SELECT * FROM klanten";
        return parent::voerQueryUit($query);
    }

    // Get a specific customer
    public function getCustomer($id)
    {
        $query = "SELECT * FROM klanten WHERE id = $id";
        return parent::voerQueryUit($query);
    }

    // Save a new customer
    public function saveCustomer()
    {
        // Check if all required fields are filled in
        if (
            $this->getVoornaam() == "" || $this->getAchternaam() == ""
            || $this->getEmail() == "" || $this->getKlus() == ""
        ) {
            return false;
        }

        $voornaam = $this->getVoornaam();
        $achternaam = $this->getAchternaam();
        $email = $this->getEmail();
        $klus = $this->getKlus();


        $query = "INSERT INTO klanten (voornaam, achternaam, email, klus)
        VALUES ('$voornaam', '$achternaam', '$email', '$klus')";

        // Return true if the query is successful, else return false
        if (parent::voerQueryUit($query) == false) {
            return false;
        } else {
            return true;
        }
    }


    // Update a customer
    public function updateCustomer($id)
    {
        // Check if all required fields are filled in
        if (
            $this->getVoornaam() == "" || $this->getAchternaam() == ""
            || $this->getEmail() == "" || $this->getKlus() == ""
        ) {
            return false;
        }

        $voornaam = $this->getVoornaam();
        $achternaam = $this->getAchternaam();
        $email = $this->getEmail();
        $klus = $this->getKlus();

        $query = "UPDATE klanten 
        SET voornaam = '$voornaam', achternaam = '$achternaam', email = '$email', klus = '$klus'
        WHERE id = $id";
        // Return true if the query is successful, else return false
        if (parent::voerQueryUit($query) == false) {
            return false;
        } else {
            return true;
        }
    }

    // Delete a customer
    public function deleteCustomer($id)
    {
        $query = "DELETE FROM klanten WHERE id = $id";
        // Return true if the query is successful, else return false
        if (parent::voerQueryUit($query) == false) {
            return false;
        } else {
            return true;
        }
    }

    // Getters and setters
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getVoornaam()
    {
        return $this->voornaam;
    }

    public function setVoornaam($voornaam)
    {
        $this->voornaam = $voornaam;
    }

    public function getAchternaam()
    {
        return $this->achternaam;
    }

    public function setAchternaam($achternaam)
    {
        $this->achternaam = $achternaam;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getKlus()
    {
        return $this->klus;
    }

    public function setKlus($klus)
    {
        $this->klus = $klus;
    }

}

