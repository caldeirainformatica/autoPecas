<?php
require_once 'model/mclientes.php';
require_once './db/conexao.php';
$cliente = new MClientes();
$con = new Conexao();
$cliente->setTipo("1");
$cliente->setNome("SAndra");
$cliente->setRazao("");
//sempre modificar cpf antes de testar
$cliente->setCnpj_cpf("000.000.441-34");
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

//echo($cliente->insert());

    function atualizar($coluna,$valor,$tabela,$where){
        //$coluna e $valor são arrays?
        if(is_array($coluna)&& is_array($valor)){
            //tem o mesmo número de elementos?
            if(count($coluna) == count($valor)){
                //montar sql
                $valor_coluna = null;
                //colocar arrays em uma string
                for($i = 0;$i < count($coluna);$i++){
                    $valor_coluna .= "{$coluna[$i]} = '{$valor[$i]}',";
                }
                $valor_coluna = substr($valor_coluna,0, -1);
                
                $where = ($where == null ? '' : 'WHERE '.$where);
                $atualizar = "UPDATE {$tabela} SET {$valor_coluna} {$where}";
            }else{
                return false;
            }
        }else{
            //montar sql
            $where = ($where == null ? '' : 'WHERE '.$where);
            $atualizar = "UPDATE {$tabela} SET {$coluna}  = '{$valor}'{$where}";
        }
        return $atualizar;
    }
//        $colunas = array('nome','logradouro');
//        $valores = array('SANDRA' , 'NOROESTE');
//        $id = '22';
//        print_r($cliente->update($colunas, $valores, $id));
    
    
    print_r($con->executarSelectAprimorado("clientes"));