<?php

// transforma um aquivo csv em um array bidimencional;

$filename = "usuarios.csv";

if(file_exists($filename)){
    $file = fopen($filename, "r");

    $headers = explode(",", fgets($file)) ;
    
    $data = array();

    // esse while carrega o array $data() com o outro array $linha().
    while($row = fgets($file)){
        $rowdata = explode(",", $row);
    
        $linha = array();

        for ($i=0; $i < count($headers); $i++) { 
            
            $linha[$i][$headers[$i]] = $rowdata[$i];

        }

        array_push($data, $linha);

    }

    echo json_encode($data);

    fclose($file);

}

?>