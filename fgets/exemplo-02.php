<?php

// transforma todo arquivo em uma string

$filename = "php7.png";

$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new Finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);

//echo "data:image/png;base64," .$base64;  E S S A    É  A    S T R I N G 

$base64encode =  "data:" .$mimetype .";base64," .$base64;

?>



<img src="<?=$base64encode?>" alt="">