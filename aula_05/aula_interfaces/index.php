<?php

ini_set('display_errors', 1);

include "Validate.php";
include "ValidateBR.php";
include "ValidateUS.php";

$cpf = "123.123.123-12";
$cep = "12345-123";

$UsDocument = "123.123.123-12345";
$postalCode = "12345-123";

$br = new ValidateBR();
$us = new ValidateUS();

$br->validateDocument($cpf);
$br->validatePostalCode($cep);

$us->validateDocument($UsDocument);
$us->validatePostalCode($postalCode);
