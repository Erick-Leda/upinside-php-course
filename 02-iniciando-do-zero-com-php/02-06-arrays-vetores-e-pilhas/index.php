<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.06 - Arrays, vetores e pilhas");

/**
 * [ arrays ] https://php.net/manual/pt_BR/language.types.array.php
 */
fullStackPHPClassSession("index array", __LINE__);

$arrA = array(1,2,3);
$arrA = [0,1,2,3];

var_dump($arrA);

$arrayIndex = [
    "Brian",
    "Angus",
    "Malcolm"
];
$arrayIndex[] = "Jorge";
$arrayIndex[] = "Roberto";

var_dump($arrayIndex);
/**
 * [ associative array ] "key" => "value"
 */
fullStackPHPClassSession("associative array", __LINE__);

$arrayAssoc = [
    "vocal" => "Brian",
    "soloGuitar" => "Malcolm",
    "baseGuitar" => "Angus",
    "bassGuitar" => "Cliff"
];
$arrayAssoc["drums"] = "Phil";
$arrayAssoc["rockBand"] = "AC/DC";

var_dump($arrayAssoc);

/**
 * [ multidimensional array ] "key" => ["key" => "value"]
 */
fullStackPHPClassSession("multidimensional array", __LINE__);

$brian = ["name" => "brian", "instrument" => "Mic"];
$angus = ["name" => "Angus", "instrument" => "Guitar"];
$instruments = [
    $brian,
    $angus
];
var_dump($instruments);
var_dump([
    "brian" => $brian,
    "angus" => $angus
]);


/**
 * [ array access ] foreach(array as item) || foreach(array as key => value)
 */
fullStackPHPClassSession("array access", __LINE__);

$acdc = [
    "banda" => "AC/DC",
    "vocal" => "Brian",
    "soloGuitar" => "Malcolm",
    "baseGuitar" => "Angus",
    "bassGuitar" => "Cliff",
    "drums" => "Phil"
];

echo "<p>O vocal da banda AC/DC é {$acdc["vocal"]}, e junto com 
{$acdc["soloGuitar"]} fazem um ótimo show de rock</p>";

$pearlJam =[
    "banda" => "Pearl Jam",
    "vocal" => "Eddie",
    "soloGuitar" => "Mike",
    "baseGuitar" => "Stone",
    "bassGuitar" => "Jeff",
    "drums" => "Jack"
];

$rockBands = [
    "acdc" => $acdc,
    "pearlJam" => $pearlJam
];

var_dump($rockBands);

echo "<p> O nome do vocalista da banda AC/DC 
é {$rockBands["acdc"]["vocal"]}</p>";

foreach ($acdc as $item){
    echo "<p>{$item}</p>";
}

foreach ($acdc as $key => $value){
    echo "<p>{$value} is the {$key} of the band!</p>";
}

foreach ($rockBands as $rockBand){
    $art = "<article><h1>%s</h1><p>%s is the vocal of the band!</p><p>%s is the soloGuitar 
        of the band!</p><p>%s is the baseGuitar of the band!</p><p>%s is the bassGuitar 
        of the band!</p><p>%s is the drummer of the band!</p></article>";

    vprintf($art, $rockBand);
}
