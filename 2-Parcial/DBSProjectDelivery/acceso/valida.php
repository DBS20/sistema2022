<?php

	$correo=$_POST['correo'];
	$contrasena=$_POST['contrasena'];

	$consulta  = " SELECT * FROM
				tb_usuarios WHERE email_Usu=? 
				AND pss_Usu=? ";
	$query = $conn->prepare($consulta);
	$query->bindParam(1, $correo);
	$query->bindParam(2, $contrasena);
	$query->execute();
	$cuenta=0;
	$cuenta = $query->rowCount();

	if ($cuenta)
	{
      $redireccionar="?seccion=acceso&accion=bienvenido";
	  $registro = $query->fetch();
      $_SESSION["id"]=  $registro["id_Usu"];
      $_SESSION["nombre"]=  $registro["name_Usu"];
	  $_SESSION["tipo"]=  $registro["num_tipo_usu"];
    }
  else
    $redireccionar="?seccion=acceso&accion=ingresa&mensaje=novalido";
?>
<script>
  window.location.href = "<?=$redireccionar?>";
</script>