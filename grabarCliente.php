<?php

  $nombre = $_POST["nombre"];
  $apePaterno = $_POST["apePa"];
  $apeMaterno = $_POST["apeMa"];
  $dni = $_POST["dni"];

  $data = array("nombre" => $nombre, "apellidoPaterno" => $apePaterno, "apellidoMaterno" => $apeMaterno,
                "dni" => $dni);

  $dataJson = json_encode($data);

  $url = "http://localhost:8080/ep4DaeII/cliente";
  $ch = curl_init($url);
  curl_setopt($ch,CURLOPT_POSTFIELDS,$dataJson);
  curl_setopt($ch,CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
    $resultado = curl_exec($ch);
  curl_close($ch);
  header("Location:gestionClientes.php");



?>