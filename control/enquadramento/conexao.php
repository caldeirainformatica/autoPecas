<?php

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
    public function recuperaSelect($sql)
    {
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