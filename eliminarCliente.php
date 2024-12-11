<?php
	$id = $_GET["id"];
	$url = "http://localhost:8080/ep4DaeII/cliente/".$id;
	$ch = curl_init($url);
	curl_setopt($ch,CURLOPT_POSTFIELDS,$dataJson);
	curl_setopt($ch,CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
	curl_setopt($ch,CURLOPT_CUSTOMREQUEST, "DELETE");
	curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
	$resultado = curl_exec($ch);
	curl_close($ch);
	header("Location:gestionClientes.php");
?>