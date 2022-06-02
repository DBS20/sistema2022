<?php 

    $user = "dbojorquezadm";
    $pss = "[p]FmDp;F1Dw%&LM+m";

    try{

        $connection = new PDO('mysql:host=localhost;dbname=dbojorquez',$user,$pss);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){

        echo "ERROR: " . $e->getMessage();

    }



?>