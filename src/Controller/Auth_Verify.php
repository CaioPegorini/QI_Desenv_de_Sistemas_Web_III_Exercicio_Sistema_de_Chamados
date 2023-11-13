<?php

namespace Qi\SistemaDeChamados\Controller; //Em todos arquivos do Controller, teremos que colocar este namescape

session_start();
if(empty($_SESSION["user_data"])){
    header("location:../index.html");
    exit;
}

?>