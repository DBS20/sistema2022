<?php

  $nombre=$_POST["nombre"];
  $usuario=$_POST["usuario"];
  $contrasena=$_POST["contrasena"];
  $tipo=$_POST["tipo"];

  $consulta  = " INSERT INTO tb_usuarios (name_Usu,email_Usu,pss_Usu,num_tipo_usu) 
                VALUES (?,?,?,1) ";
  $query = $conn->prepare($consulta);
  $query->bindParam(1, $nombre);
  $query->bindParam(2, $usuario);
  $query->bindParam(3, $contrasena);
  $query->bindParam(4, $tipo);
  $query->execute();

?>

  <h1>REGISTRAR</h1>
  <h2>Se guardaron los cambios con éxito.</h2>