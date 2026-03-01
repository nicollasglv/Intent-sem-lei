<?php
$nome = trim($_POST["nome"]);
$msg = trim($_POST["msg"]);

if($nome != "" && $msg != ""){
    $linha = "<b>".htmlspecialchars($nome).":</b> ".htmlspecialchars($msg)."<br>\n";
    file_put_contents("chat.txt",$linha,FILE_APPEND | LOCK_EX);
}
?>