<?php
require_once('../config/db_config.php');

class Database
{
    Private $connectie;

    public function __construct() {
        $this->connectie = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    }

    public function voerQueryUit($query)
    {
        $result = $this->connectie->query($query);
        $rows = $result->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

    public function sluitVerbinding()
    {
        $this->connectie = null;
    }

    public function __destruct()
    {
        $this->sluitVerbinding();
    }
}

    function testVerbinding()
    {
        if($connectie = true)
        {
            echo "<br>Er is een actieve verbinding<br>";
        }
        else 
        {
            echo "<br>Er is geen actieve verbinding<br>";
        }
    }

$mijn_database = new Database();

?>