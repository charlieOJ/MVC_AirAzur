<?php
require_once 'config.php';
function connect(){
    

    try
    {
    //connexion
        $connexion=new PDO('mysql:host='.host.'; dbname='.dbname, user, password);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        mysql_query("SET NAMES 'utf-8'");
        return $connexion;
    }
    catch(PDOException $e)
    {
        echo "problème de connexion ". $e->getMessage();
        return false;
    }
}