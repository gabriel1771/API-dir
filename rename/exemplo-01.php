<?php

$dir1 = "folde_01";
$dir2 = "folde_02";

if(!is_dir($dir1)) mkdir($dir1);
if(!is_dir($dir2)) mkdir($dir2);

$filename = "READM.TXT";

if(!is_file($dir1 .DIRECTORY_SEPARATOR .$filename)){
    $file = fopen($dir1 .DIRECTORY_SEPARATOR .$filename, "w+");

    fwrite($file, date("Y-m-d H:i:s"));

    fclose($file);
}

rename($dir1 .DIRECTORY_SEPARATOR .$filename, $dir2 .DIRECTORY_SEPARATOR .$filename);

echo "Arquivo movido com sucesso";

?>
