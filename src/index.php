<?php

require __DIR__ . "/functions/sum.php";
require __DIR__ . "/functions/subtracion.php";
require __DIR__ . "/functions/multiplication.php";
require __DIR__ . "/functions/division.php";

foreach(["operator", "valor1", "valor2"] as $param) {
  if (!array_key_exists($param, $_REQUEST)) {
    echo json_encode([
      "success" => false,
      "message" => "O parâmetro $param é obrigatório!"
    ]);
    die;
  }
}

$operator = $_REQUEST["operator"];
$valor1 = $_REQUEST["valor1"];
$valor2 = $_REQUEST["valor2"];

if ($operator === "+") {
  echo json_encode([
    "success" => true,
    "result" => sum($valor1, $valor2)
  ]);
  die;
}
else if ($operator === "-") {
  echo json_encode([
    "success" => true,
    "result" => subtracion($valor1, $valor2)
  ]);
  die;
}
else if ($operator === "*") {
  echo json_encode([
    "success" => true,
    "result" =>  multiplication($valor1, $valor2)
  ]);
  die;
}
else if ($operator === "/") {
  echo json_encode([
    "success" => true,
    "result" => division($valor1, $valor2)
  ]);
  die;
}
else {
  echo json_encode([
    "success" => false,
    "mesage" => "operador inválido!"
  ]);
  die;
}
