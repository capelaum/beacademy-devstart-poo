<?php

include "User.php";
include "Client.php";
include "Manager.php";
include "GeralManager.php";

include "validate.php";

$cpf = "123.123.123-12";
$password = "123456";

if (Validate::cpf($cpf)) {
} else {
  throw new Exception('CPF inválido');
}

$c1 = new Client(
  "João",
  "joao@email.com",
  $password,
  $cpf,
  "01/01/2020"
);

$m1 = new Manager(
  "Maria",
  "maria@email.com",
  $password,
  $cpf,
  5000.25,
  "Manhã"
);

$g1 = new GeralManager(
  "Luis",
  "luis@email.com",
  $password,
  $cpf,
  10000.6,
  "Manhã",
);

$g1->setAnualBonus(5000.25);

var_dump($c1, $m1, $g1);
