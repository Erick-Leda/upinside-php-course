<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.03 - Funções para arrays");

/*
 * [ criação ] https://php.net/manual/pt_BR/ref.array.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$index = [
  "AC/DC",
  "Nirvana",
  "Alter Bridge"
];

$assoc = [
    "band_1" => "AC/DC",
    "band_2" => "Nirvana",
    "band_3" => "Alter Bridge",

];
echo "<h2>ADICIONAR</h2>";
echo "<h4>ARRAY ORIGINAL</h4>";

var_dump([
    $index,
    $assoc
]);

//////////////////
echo "<h4>ARRAY_UNSHIFT</h4>";
echo "<h5>ADICIONA UM OU MAIS ÍNDICES NO COMEÇO DO ARRAY</h5>";
array_unshift($index, "Teste");
array_unshift($index, " ", "Pearl Jam");

$assoc = ["band_4" => "Pearl Jam", "band_5" => ""]+$assoc;
var_dump([
    $index,
    $assoc
]);

///////////////////
echo "<h4>ARRAY_PUSH</h4>";
echo "<h5>ADICIONA UM OU MAIS ÍNDICES NO FINAL DO ARRAY</h5>";

array_push($index, "");
$assoc = $assoc+ ["band_6" => ""];

var_dump([
    $index,
    $assoc
]);

echo "<h2>REMOVER</h2>";

///////////////////////
echo "<h4>ARRAY_SHIFT</h4>";
echo "<h5>REMOVE O PRIMEIRO ÍNDICE DO ARRAY</h5>";

array_shift($index);
array_shift($assoc);

var_dump([
   $index,
   $assoc
]);

///////////////////
echo "<h4>ARRAY_POP</h4>";
echo "<h5>REMOVE O ÚLTIMO ÍNDICE DO ARRAY</h5>";

array_pop($index);
array_pop($assoc);

var_dump([
    $index,
    $assoc
]);

//////////////////////
echo "<h4>ARRAY_FILTER</h4>";
echo "<h5>REMOVE ÍNDICES VAZIOS</h5>";

$index = array_filter($index);
$assoc = array_filter($assoc);

var_dump([
    $index,
    $assoc
]);
/*
 * [ ordenação ] reverse | asort | ksort | sort
 */
fullStackPHPClassSession("ordenação", __LINE__);

$index = [
    "AC/DC",
    "Nirvana",
    "Alter Bridge"
];

$assoc = [
    "band_1" => "AC/DC",
    "band_2" => "Nirvana",
    "band_3" => "Alter Bridge",
];

//////////////////////////
echo "<h4>ARRAY ORIGINAL</h4>";
var_dump([
    $index,
    $assoc
]);

/////////////////////////
echo "<h4>ARRAY_REVERSE</h4>";
echo "<h5>INVERTE A ORDEM DO ARRAY</h5>";

$index = array_reverse($index);
$assoc = array_reverse($assoc);

var_dump([
    $index,
    $assoc
]);

////////////////
echo "<h4>ASORT</h4>";
echo "<h5>ORDENA O ARRAY NA ORDEM ALFABÉTICA</h5>";

asort($index);
asort($assoc);

var_dump([
    $index,
    $assoc
]);

////////////////
echo "<h4>ARSORT</h4>";
echo "<h5>ORDENA INVERSAMENTE O ARRAY NA ORDEM ALFABÉTICA</h5>";

arsort($index);
arsort($assoc);

var_dump([
    $index,
    $assoc
]);

///////////////////
echo "<h4>KSORT</h4>";
echo "<h5>ORDENA A ARRAY NA ORDEM DOS ÍNDICES(KEYS)</h5>";

ksort($index);
ksort($assoc);

var_dump([
    $index,
    $assoc
]);

//////////////////////
echo "<h4>KRSORT</h4>";
echo "<h5>ORDENA INVERSAMENTE A ARRAY NA ORDEM DOS ÍNDICES(KEYS)</h5>";

krsort($index);
krsort($assoc);

var_dump([
    $index,
    $assoc
]);

////////////////////
echo "<h4>SORT</h4>";
echo "<h5>ORDENA A ARRAY NA ORDEM ALFABÉTICA E REINDEXA A ARRAY</h5>";

$index = [
    "AC/DC",
    "Nirvana",
    "Alter Bridge"
];

$assoc = [
    "band_1" => "AC/DC",
    "band_2" => "Nirvana",
    "band_3" => "Alter Bridge",
];
sort($index);
sort($assoc);

var_dump([
    $index,
    $assoc
]);

///////////
echo "<h4>RSORT</h4>";
echo "<h5>ORDENA INVERSAMENTE A ARRAY NA ORDEM ALFABÉTICA E REINDEXA A ARRAY</h5>";

$index = [
    "AC/DC",
    "Nirvana",
    "Alter"
];

$assoc = [
    "band_1" => "AC/DC",
    "band_2" => "Nirvana",
    "band_3" => "Alter",
];
rsort($index);
rsort($assoc);

var_dump([
    $index,
    $assoc
]);


/*
 * [ verificação ]  keys | values | in | explode
 */
fullStackPHPClassSession("verificação", __LINE__);

$index = [
    "AC/DC",
    "Nirvana",
    "Alter Bridge"
];

$assoc = [
    "band_1" => "AC/DC",
    "band_2" => "Nirvana",
    "band_3" => "Alter Bridge",
];

//////////////////////////
echo "<h4>ARRAY ORIGINAL</h4>";
var_dump([
    $index,
    $assoc
]);

echo "<h4>ARRAY_KEYS</h4>";
echo "<h5>RETORNA AS KEYS DE UM ARRAY</h5>";

var_dump([
    array_keys($assoc),
]);

echo "<h4>ARRAY_VALUES</h4>";
echo "<h5>RETORNA OS VALUES DE UM ARRAY</h5>";

var_dump([
    array_keys($assoc),
]);

echo "<h4>IN_ARRAY</h4>";
echo "<h5>CHECA A EXISTÊNCIA DE UM VALUE NO ARRAY</h5>";

if (in_array("AC/DC", $assoc)){
    echo "AC/DC existe";
}

echo "<h4>IMPLODE</h4>";
echo "<h5>IMPLODE UM ARRAY EM UMA STRING</h5>";

$arrToString = implode(", ", $assoc);
echo "<p>{$arrToString}</p>";

echo "<h4>IMPLODE</h4>";
echo "<h5>EXPLODE UMA STRING EM UM ARRAY</h5>";
var_dump(explode(", ", $arrToString));

/**
 * [ exemplo prático ] um template view | implode
 */
fullStackPHPClassSession("exemplo prático", __LINE__);


$profile= [
    "name" => "Robson",
    "company" => "UpInside",
    "mail" => "cursos@upinside.com"
];

$template = <<<TPL
    <article>
        <h1>{{name}}</h1>
        <p>{{company}}<br>
        <a href="mailto:{{mail}}" title=" Enviar e-mail para {{name}}">Enviar e-mail</a></p>
    </article>
TPL;

echo $template;

echo str_replace(
    array_keys($profile), array_values($profile), $template
);

$replaces = "{{".implode("}}&{{", array_keys($profile))."}}";

var_dump($replaces);

var_dump(explode("&", $replaces));

echo str_replace(
    explode("&", $replaces), array_values($profile), $template
);