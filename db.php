<?php

    function myConnection(){
        $base = 'tableaudebord';
        $server = 'localhost';
        $user = 'root';
        $pass = '';

        try {
            $conn = new PDO("mysql:host=$server;dbname=$base", $user, $pass);
            $conn->query("SET NAMES 'utf8'");
            return $conn;
        }

        catch(PDOException $e) {
            die('Erreur:' . $e->getMessage());
        }
    }

?>