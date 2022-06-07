<?php

ini_set("display_errors", 1);

include "Student.php";
include "Course.php";
include "Teacher.php";

$t1 = new Teacher();
$t1->name = "Alessando";
$t1->cpf = "123.123.123-12";
$t1->wage = 5000;

var_dump($t1);
