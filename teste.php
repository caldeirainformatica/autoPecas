<?php
require_once 'db/conexao.php';
$con = new Conexao();
echo($con->conectar());
