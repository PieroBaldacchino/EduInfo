<?php
    $db="infologia";
    $host="localhost";
    $user="root";
    $password="";
    try
    {
        $conn=new PDO("mysql:host=$host;dbname=$db",$user,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        echo "Connessione fallita!".$e->getMessage();
    }
?>