<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 - Closures e generators");

/*
 * [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php
 */
fullStackPHPClassSession("closures", __LINE__);

$myAge = function ($year){
  $age = date("Y") - $year;
  return "<h5>Você tem {$age} anos !</h5>";
};

echo $myAge (1998);

$priceBrl = function ($price){
  return "R$ ".number_format($price, 2, ",", ".");
};

echo "<p>O projeto custa {$priceBrl(5070)}</p>";

$myCart = [];
$myCart["totalPrice"] = 0;
$cartAdd = function ($item, $qtd, $price) use (&$myCart){
    $myCart[$item] = $qtd * $price;
    $myCart["totalPrice"] += $myCart[$item];
};

$cartAdd("rola", 1, 50);
$cartAdd("ppk", 2, 250);
var_dump($myCart);

/*
 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
fullStackPHPClassSession("generators", __LINE__);

$iterator = 100;

/*function showDates($days){

    $saveDate = [];
    for ($day =1; $day <$days; $day++){
        $saveDate[] = date("d/m/Y", strtotime("+{$day}days"));
    }
    return $saveDate;
}

echo "<div style= 'text-align: justify'>";
foreach (showDates(0) as $date){
    echo "<small class = 'tag'>{$date}</small>" . PHP_EOL;
}
echo "</div>";
*/
function generatorDate($days)
{
    for ($day =1; $day <$days; $day++){
        yield date("d/m/Y", strtotime("+{$day}days"));
    }
}
echo "<div style= 'text-align: justify'>";
foreach (generatorDate($iterator) as $date){
    echo "<small class = 'tag'>{$date}</small>" . PHP_EOL;
}
echo "</div>";
