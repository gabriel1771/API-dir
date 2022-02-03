<?php

require_once("config.php");

$usuarios = new Usuario();

$data = $usuarios->getList();

$headers = array();

foreach ($data[0] as $key => $value ) {
    array_push($headers, ucfirst($key));
}

$file = fopen("usuarios.csv", "w+");

fwrite($file, implode(",", $headers) ."\r\n");

foreach ($data as $row) {
    
    $dados = array();

    foreach ($row as $key => $value) {
        array_push($dados, $value);
    }

    fwrite($file, implode(",", $dados) ."\r\n");        




}


fclose($file);

?>