<?php

$nome = $_POST["nome"];
$msg = $_POST["msg"];

$linha = "<b>$nome:</b> $msg <br>";

file_put_contents("chat.txt",$linha,FILE_APPEND);

?>