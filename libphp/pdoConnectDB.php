<?php
    function pdoConnectDB(){
        $servername = "localhost";
        $username = "gaif_ru";
        $password = "2323";
        $dbname = "gaif_ru";

        $conn = new PDO ("mysql:host=$servername;dbname=$dbname", $username, $password);
        return $conn;
        

    }

?>