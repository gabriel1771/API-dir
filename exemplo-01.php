<?php

$name = "image";

if (!is_dir($name)){
    mkdir($name);

    echo "diretório criado com sucesso";
}else {
    rmdir($name);
    echo "o diretório $name já existe e foi removido";
}

?>