<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.11 - Trabalhando com funções");

/*
 * [ functions ] https://php.net/manual/pt_BR/language.functions.php
 */
fullStackPHPClassSession("functions", __LINE__);

require __DIR__."/functions.php";

//função com dados obrigatórios
var_dump(functionName("Pearl Jam", "Prince", "Michael Jackson"));
var_dump(functionName("Robson", "Kaue", "Gustavo"));
//definida com prioridade dos dados: obrigatório/ importante/ opcional
var_dump(optionArgs("Robson", "Kaue", "Gustavo"));

/*
 * [ global access ] global $var
 */
fullStackPHPClassSession("global access", __LINE__);

$weight = 86;
$height = 1.83;
echo calcImc();

/*
 * [ static arguments ] static $var
 */
fullStackPHPClassSession("static arguments", __LINE__);

$pay = payTotal(400);
$pay = payTotal(400);
echo $pay;
/*
 * [ dinamic arguments ] get_args | num_args
 */
fullStackPHPClassSession("dinamic arguments", __LINE__);

var_dump(myTeam("Erick", "Roula", "Pinto", "jiromba"));