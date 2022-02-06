<?php

// com uma url podemos pegar qualquer arquivo e colocar em uma variavel para de pois criar uma arquivo e escrever o mesmo com a variavel que criamos

$link = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzTVVy6S5-ZRq6XOb2rdqbh5DJvtw6KiETn23pdHPhgygnHllRbQM2Kela7g&amp;usqp=CAI&amp;s=10";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

?>

<img src="<?=$basename?>" alt="">