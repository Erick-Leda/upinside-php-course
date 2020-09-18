<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.11 - Interação com URLs");

/*
 * [ argumentos ] ?[&[&][&]]
 */
fullStackPHPClassSession("argumentos", __LINE__);

echo "<h1><a href='index.php'>Clear</a></h1>";
echo "<p><a href='index.php?arg1=true&arg2=true'>Argumentos</a></p>";

$data= [
    "name" => "Erick",
    "company" => "UpInside",
    "mail" => "erickleda10@gmail.com"
];

$arguments = http_build_query($data);
echo "<h1><a href='index.php?{$arguments}'>Args by Array</a></h1>";

var_dump($_GET);

$object = (object)$data;
var_dump(
    $object,
    http_build_query($object)
);
/*
 * [ segurança ] get | strip | filters | validation
 * [ filter list ] https://php.net/manual/en/filter.filters.php
 */
fullStackPHPClassSession("segurança", __LINE__);

$dataFilter= http_build_query([
    "name" => "Erick",
    "company" => "UpInside",
    "mail" => "erickleda10@gmail.com",
    "site" => "Upinside.com.br",
    "script" => "<script>alert('Esse é um Javascript')</script>",
]);

echo "<p><a href='index.php?{$dataFilter}'>Data Filter</a></p>";

$dataUrl = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRIPPED);
if ($dataUrl){
    if (in_array("", $dataUrl)){
        echo "<p class='trigger warning'>Faltam dados!</p>";
    }
    elseif(empty($dataUrl["mail"])){
        echo "<p class='trigger warning'>Falta o email!</p>";

    }elseif(!filter_var($dataUrl["mail"], FILTER_VALIDATE_EMAIL)){
        echo "<p class='trigger warning'>E-mail Inválido !</p>";
    }else{
        echo "<p class='trigger accept'>Tudo Certo !</p>";

    }
}else{
    var_dump(false);
}

var_dump($dataUrl);


$dataFilter= http_build_query([
    "name" => "Erick",
    "company" => "UpInside",
    "mail" => "erickleda10@gmail.com",
    "site" => "https://upinside.com.br",
    "script" => "<script>alert('Esse é um Javascript')</script>",
]);

parse_str($dataFilter, $arrDataFilter);
var_dump($arrDataFilter);

$dataPreFilter= [
    "name" => FILTER_SANITIZE_STRING,
    "company" => FILTER_SANITIZE_STRING,
    "mail" => FILTER_VALIDATE_EMAIL,
    "site" => FILTER_VALIDATE_URL,
    "script" => FILTER_SANITIZE_STRING,
];

var_dump(filter_var_array($arrDataFilter, $dataPreFilter));





