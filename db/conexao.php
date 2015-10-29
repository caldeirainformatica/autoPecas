<?php
/*
 * @author: Daniel Fiuza
 * @date: 29/10/2015 18:43
 *  
 */
class Conexao{
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $banco = 'automecanica';
    
    private $conexao;
    private $resultado;


    function conectar(){
        $this->conexao = mysqli_connect($this->host ,$this->user,$this->password);
        mysqli_select_db($this->conexao,$this->banco) or die(trigger_error('Erro ao selecionar banco de dados'));
    }
    
    
    public function desconectar(){
        mysqli_close($this->conexao);
    }
    
    //essa funcção só funciona para insert,delete e update
    public function runQuery($sql){
        $this->conectar();
        $this->resultado = mysqli_query($this->conexao, $sql);
          $this->desconectar();
    }
    
    public function runSelect($sql){
        $this->conectar();
        $this->resultado = mysqli_query($this->conexao, $sql);
        
        $registros = array();
       while($dados = mysqli_fetch_assoc($this->resultado)) {
          $registros[] = $dados; 
       }
       $this->desconectar();
       return $registros;
    }
   // 
  // 

}
