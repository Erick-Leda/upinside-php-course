<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.08 - Herança e polimorfismo");

require __DIR__ . "/source/autoload.php";

/*
 * [ classe pai ] Uma classe que define o modelo base da estrutura da herança
 * http://php.net/manual/pt_BR/language.oop5.inheritance.php
 */
fullStackPHPClassSession("classe pai", __LINE__);


$event = new Source\Inheritance\Event\Event(
    "Workshop FSPHP",
    new DateTime("2019-05-20 16:00"),
    2500,
    "3"
);

var_dump($event);

$event->register("Erick Leda", "erickleda10@gmail.com");
$event->register("Rola", "sdgfsdfleda10@gmail.com");
$event->register("Num sei", "gfasdfadfail.com");
$event->register("hgfshfhah", "gWTY5376ETHYDFAH@gmail.com");

/*
 * [ classe filha ] Uma classe que herda a classe pai e especializa seuas rotinas
 */
fullStackPHPClassSession("classe filha", __LINE__);

$address = new Source\Inheritance\Address("142", "19");

$event = new Source\Inheritance\Event\EventLive(
    "Workshop FSPHP",
    new DateTime("2019-05-20 16:00"),
    2500,
    "3",
    $address
);

var_dump($event);


/*
 * [ polimorfismo ] Uma classe filha que tem métodos iguais (mesmo nome e argumentos) a class
 * pai, mas altera o comportamento desses métodos para se especializar
 */
fullStackPHPClassSession("polimorfismo", __LINE__);

$event = new Source\Inheritance\Event\EventOnline(
    "Workshop FSPHP",
    new DateTime("2019-05-20 16:00"),
    197,
    "https://upinside.com.br/aovivo",
);

var_dump($event);

$event->register("Erick Leda", "erickleda10@gmail.com");
$event->register("Rola", "sdgfsdfleda10@gmail.com");
$event->register("Num sei", "gfasdfadfail.com");
$event->register("hgfshfhah", "gWTY5376ETHYDFAH@gmail.com");



