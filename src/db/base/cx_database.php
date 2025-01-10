<?php

function enableErrorLog()
{
  error_reporting(E_ALL);
  ini_set('display_errors', '1');
  return true;
}

function createConnection()
{
  try {
    $host = "fdb1028.awardspace.net";
    $db = "4562179_carteleria";
    $user = "4562179_carteleria";
    $pass = "Sagaseta_1234";
    $dns = "mysql:host=$host;dbname=$db";
    $conn = new PDO($dns, $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
  } catch (PDOException $ex) {
    error_log("Error en la conexión a la base de datos: " .
      $ex->getMessage());
    return null;
  }
}
