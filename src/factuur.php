<?php
include_once ('database.php');

class Factuur extends Database
{
    private $id;
    private $verzender;
    private $ontvanger;
    private $bedrag;
    private $klus;

    // Get a specific customer
    public function getFactuur($verzender)
    {
        $query = "SELECT * FROM factuur WHERE verzender = $verzender";
        return parent::voerQueryUit($query);
    }

    // Save a new customer
    public function saveFactuur()
    {
        // Check if all required fields are filled in
        if (
            $this->getVerzender() == "" || $this->getOntvanger() == ""
            || $this->getBedrag() == "" || $this->getKlus() == ""
        ) {
            return false;
        }

        $verzender = $this->getVerzender();
        $ontvanger = $this->getOntvanger();
        $bedrag = $this->getBedrag();
        $klus = $this->getKlus();


        $query = "INSERT INTO factuur (verzender, ontvanger, bedrag, klus)
        VALUES ('$verzender', '$ontvanger', '$bedrag', '$klus')";

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

    public function getVerzender()
    {
        return $this->verzender;
    }

    public function setVerzender($verzender)
    {
        $this->verzender = $verzender;
    }

    public function getOntvanger()
    {
        return $this->ontvanger;
    }

    public function setOntvanger($ontvanger)
    {
        $this->ontvanger = $ontvanger;
    }

    public function getBedrag()
    {
        return $this->bedrag;
    }

    public function setBedrag($bedrag)
    {
        $this->bedrag = $bedrag;
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

