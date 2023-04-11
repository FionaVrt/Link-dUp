<?php
    try{
        $database = new PDO('mysql:host=localhost;dbname=likdup', 'root','root');
    } catch (Exception $e){
        die('Error :'. $e->getMessage());
    } 
?>