<?php

include "Student.php";
include "Course.php";
include "Teacher.php";
include "Discipline.php";

$s1 = new Student();
$s1->name = "Luis";
$s1->cpf = "123.123.123-12";

var_dump($s1);

$c1 = new Course();
$c1->name = "Devstart";
$c1->description = "Bootcamp em PHP";

var_dump($c1);

$t1 = new Teacher();
$t1->name = "Luis";
$t1->wage = 5000;
$t1->disciplines = ["PHP - Introdução", "PHP Orientado a objetos"];

var_dump($t1);

$d1 = new Discipline();
$d1->name = "PHP Orientado a objetos";
$d1->workload = 20;
$d1->teachers = ["João", "Daniel"];

var_dump($d1);
