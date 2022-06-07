<?php

include "User.php";
include "Client.php";
include "Manager.php";
include "GeralManager.php";

$c1 = new Client(
  "João",
  "joao@email.com",
  "123456",
  "12345678910",
  "01/01/2020"
);

$m1 = new Manager(
  "Maria",
  "maria@email.com",
  "123456",
  "12345678910",
  5000.25,
  "Manhã"
);

$g1 = new GeralManager(
  "Luis",
  "luis@email.com",
  "123456",
  "123.123.123-12",
  10000.6,
  "Manhã",
);

$g1->setAnualBonus(5000.25);

var_dump($c1, $m1, $g1);
