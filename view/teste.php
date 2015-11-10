<?php
require_once '../model/MCliente.php';
require_once '../model/MEmpresa.php';
//require_once '../model/mProdutos.php';
require_once '../db/conexao.php';
$cliente = new MClientes();
$con = new Conexao();
$empresa = new MEmpresa();
//$produto = new MProduto();

$cliente->setTipo("1");
$cliente->setNome("Daniel");
$cliente->setRazao("");
//sempre modificar cpf antes de testar
$cliente->setCnpj_cpf("000.000.441-90");
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

//print_r($cliente->select('select id_clientes,nome,cnpj_cpf from clientes'));

    
//        $colunas = array('nome','logradouro');
//        $valores = array('SANDRA' , 'NOROESTE');
//        $id = '22';
//        print_r($cliente->update($colunas, $valores, $id));
    
    
   // print_r($con->executarSelectAprimorado("clientes"));
   //print_r($con->executarSelect("SELECT * from clientes WHERE cnpj_cpf = '{$cliente->getCnpj_cpf()}' "));
   //print_r($con->deletar("clientes", "WHERE id_clientes = 3"));

//$produto->setGtim('teste ');
//$produto->setDescricao('teste');
//$produto->setGrupo_id_grupo(1);
//$produto->setSubgrupo_id_subgrupo(1);
//$produto->setNcm_id_ncm(1);
//$produto->setVolume_id_volume(1);
//$produto->setGenero_id_genero(1);
//$produto->setTributacao_id_tributacao(1);
//$produto->setObservacao('teste');

//var_dump($produto->insert());

$empresa->setRazao("");
$empresa->setFantasia('Motherfuckers S.A.');
$empresa->setCnpj("01000");
$empresa->setCnae("01000");
$empresa->setInscricaoEstadual("0");
$empresa->setLogradouro("");
$empresa->setNum("");
$empresa->setComplemento("");
$empresa->setLogo("");
$empresa->setUf("");
$empresa->setCidade("");
$empresa->setBairro("");
$empresa->setEnquadramento_id_enquadramento("1");

//var_dump($empresa->insert());
//var_dump($empresa->getEnquadramento_id_enquadramento());
//var_dump($empresa->update("fantasia", "Smoke Weed Everyday", "1"));
$attrs = get_class_vars(get_class($empresa));
