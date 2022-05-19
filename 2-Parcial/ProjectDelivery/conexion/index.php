<?php 

    $user = "sistemasgeo5452_dbojorquezadm";
    $pss = "[p]FmDp;F1Dw%&LM+m";

    try{

        $connection = new PDO('mysql:host=localhost;dbname=sistemasgeo5452_dbojorquez',$user,$pss);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){

        echo "ERROR: " . $e->getMessage();

    }



?>