<?php
require_once 'model/mclientes.php';
require_once './db/conexao.php';
$cliente = new MClientes();
$con = new Conexao();
$cliente->setTipo("1");
$cliente->setNome("SAndra");
$cliente->setRazao("");
$cliente->setCnpj_cpf("000.000.441-11");
$cliente->setRg_ie("2.222.202");
$cliente->setLogradouro("P Sul");
$cliente->setNumero("13");
$cliente->setComplemento("Quadra 104");
$cliente->setCep("72000000");
$cliente->setTel_fixo("33774455");
$cliente->setEmail("daniel@hotmail.com");
$cliente->setContato("33774455");
$cliente->setCelular("99445522");
$cliente->setObservacao("Teste");  
$cliente->setUf("DF");
$cliente->setCidade("Ceilândia");
$cliente->setBairro("Por do Sol");
$cliente->setSituacao_id_situacao("1");

//var_dump($cliente->getNome());
//var_dump($cliente->insert());

echo($cliente->insert());

