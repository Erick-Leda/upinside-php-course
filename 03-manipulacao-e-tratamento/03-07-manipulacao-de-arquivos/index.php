<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.07 - Manipulação de arquivos");

/*
 * [ verificação de arquivos ] file_exists | is_file | is_dir
 */
fullStackPHPClassSession("verificação", __LINE__);

$file = __DIR__."/file.txt";
if (file_exists($file) && is_file($file)){
    echo "<p> Existe</p>";
} else{
    echo "<p>Não existe</p>";
}


/*
 * [ leitura e gravação ] fopen | fwrite | fclose | file
 */
fullStackPHPClassSession("leitura e gravação", __LINE__);

if(!file_exists($file) || !is_file($file)){
    $fileOpen = fopen($file, "w");
    fwrite($fileOpen, "Linha 01". PHP_EOL);
    fwrite($fileOpen, "Linha 02". PHP_EOL);
    fwrite($fileOpen, "Linha 03". PHP_EOL);
    fwrite($fileOpen, "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ");
    fclose($fileOpen);

}   else{
        var_dump(file($file),
        pathinfo($file)
        );
}

echo "<p>". file($file)[3]. "</p>";

$open = fopen($file, "r");
while(!feof($open)){
    echo"<p>".fgets($open)."</p>";
}

fclose($open);

/*
 * [ get, put content ] file_get_contents | file_put_contents
 */
fullStackPHPClassSession("get, put content", __LINE__);

$getContents = __DIR__."/teste2.txt";
define("DATE_BR", "d/m/Y H:i:s");

$dateNow = new DateTime();
$dateNow->format(DATE_BR);

if(file_exists($getContents) && is_file($getContents)){
    echo file_get_contents(($getContents));
}else {
    $data = "<article><p>Hoje é dia {$dateNow->format("d")} do
{$dateNow->format("m")} de {$dateNow->format("Y")}</p></article>";
    file_put_contents($getContents, $data);
    echo file_get_contents($getContents);
}

//unlink($getContents);
//unlink($file);

if (file_exists(__Dir__."teste3.txt") && is_file(__Dir__."teste3.txt")){
    unlink(__Dir__."teste3.txt");
}