<?php
var_dump($_POST);

var_dump($_FILES);

$nom = "repetory";

if (is_dir($nom)) {
    echo 'Le répertoire existe déjà!';
}

else {
    mkdir($nom);
    echo 'Le répertoire '.$nom.' vient d\'être créé!';
}
?>
