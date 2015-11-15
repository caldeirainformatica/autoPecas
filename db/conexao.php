<?php
/*
 * @author: Daniel Fiuza
 * @date: 29/10/2015 18:43
 *  
 */
class Conexao{
    private $host = 'localhost';
    private $user = 'root';
    private $password = 'root';
    private $banco = 'automecanica';
    
    private $conexao;
    private $resultado;

    //método para a conexão
    function conectar(){
        $this->conexao = mysqli_connect($this->host ,$this->user,$this->password);
        mysqli_select_db($this->conexao,$this->banco) or die(trigger_error('Erro ao selecionar banco de dados'));
    }
    
    //método para desconectar
    public function desconectar(){
        mysqli_close($this->conexao);
    }
    
    //essa funcção só funciona para insert,delete e update
    public function executarQuery($sql){
        if(!$this->conectar()){
           if( $this->resultado = mysqli_query($this->conexao, $sql)){
                $this->desconectar();
           }
           else{
               return "Não foi possível executar query.";
           }
            return true;
        }else{
            return "Não foi possível conectar ao banco de dados";
        }
        
    }
    
    //método para executar select
    public function executarSelect($sql){
       if (!$this->conectar()){
            if($this->resultado = mysqli_query($this->conexao, $sql)){
                if(mysqli_num_rows($this->resultado)> 0){
                     $registros = array();
                    while($dados = mysqli_fetch_assoc($this->resultado)){
                        $registros[] = $dados; 
                    }
                    $this->desconectar();
                    return $registros;
                }else{
                    return false;
                }
                   
            }else{
                return "Erro ao executar pesquisa";
            }
       }else{
           return "Não foi possível conectar ao banco de dados";
       }
    }
       //função para atualizar
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
        return  $this->executarQuery($atualizar);
    }
    
    //outra opção para a função selecionar
    public function executarSelectAprimorado($tabela,$coluna="*",$where=null,$ordem=null,$limite=null){
        if(is_array($coluna)){
            $colunas = substr($coluna,0, -1);
            $sql = "SELECT {$colunas} FROM {$tabela} {$where}{$ordem}{$limite}";
        }
            $sql = "SELECT {$coluna} FROM {$tabela} {$where}{$ordem}{$limite}";
         if(!$this->conectar()){
            if($this->resultado = mysqli_query($this->conexao, $sql)){
                if(mysqli_num_rows($this->resultado)>0){
                    $resultados_totais = array();
                    //função msql_fetch_assoc() retorno: [valor][indice]
                    while($resultado = mysqli_fetch_assoc($this->resultado)){
                        $resultados_totais[] = $resultado;
                    }
                    $this->desconectar();
                    return $resultados_totais;
                }else{
                    return 'Nenhum resultado';
                } 
            }else{

                return 'Erro ao executar query';
            }
        }else{
            return 'Erro ao conectar';
        }
    }
   
    function deletar($tabela,$where){
        $sql = "DELETE FROM {$tabela} {$where}";
        
        if(!$this->conectar()){
            if($this->executarQuery($sql)){
                return 'Deletado com sucesso';
            }else{
                return 'Erro ao executar query';
            }
        }else{
            return 'Erro ao conectar ao banco de dados';
        }
    }

//---------------------------------------------------------------------------------------------------------
// Apartir daqui implementação do Ricardo Caldeira

    public function executaSql($sql){
        
        try {
            
        $this->conectar();
        $this->resultado = mysqli_query($this->conexao, $sql);
        $this->desconectar();
        return 1;
        } catch (Exception $ex) {
            $this->resultado = ('Erro ao executar sql executaSql linha 138'.$ex);
            return $this->resultado;
        }
    }
    public function recuperaSelect($sql){
			$this->conectar();
			
			$this->resulado = mysqli_query($this->conexao, $sql);
			
			$registros = array();
			while ($dados = mysqli_fetch_assoc($this->resulado)){
				$registros[] = $dados;
			}
			$this->desconectar();
			return $registros;
		}
}