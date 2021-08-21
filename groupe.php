<?php


try
{
    //ouverture d'une base de données andrea
}catch(PDOException $e){
echo 'erreur de connexion'. $e->getMessage();
}

