<?php
require_once 'db/conexao.php';


class MProduto{
    private $id_produto;
    private $gtim;
    private $descricao;
    private $grupo_id_grupo;
    private $subgrupo_id_subgrupo;
    private $ncm_id_ncm;
    private $volume_id_volume;
    private $genero_id_genero;
    private $tributacao_id_tributacao;
    private $observacao;
    
    function getId_produto() {
        return $this->id_produto;
    }

    function getGtim() {
        return $this->gtim;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getGrupo_id_grupo() {
        return $this->grupo_id_grupo;
    }

    function getSubgrupo_id_subgrupo() {
        return $this->subgrupo_id_subgrupo;
    }

    function getNcm_id_ncm() {
        return $this->ncm_id_ncm;
    }

    function getVolume_id_volume() {
        return $this->volume_id_volume;
    }

    function getGenero_id_genero() {
        return $this->genero_id_genero;
    }

    function getTributacao_id_tributacao() {
        return $this->tributacao_id_tributacao;
    }

    function getObservacao() {
        return $this->observacao;
    }

    function setId_produto($id_produto) {
        $this->id_produto = $id_produto;
    }

    function setGtim($gtim) {
        $this->gtim = $gtim;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setGrupo_id_grupo($grupo_id_grupo) {
        $this->grupo_id_grupo = $grupo_id_grupo;
    }

    function setSubgrupo_id_subgrupo($subgrupo_id_subgrupo) {
        $this->subgrupo_id_subgrupo = $subgrupo_id_subgrupo;
    }

    function setNcm_id_ncm($ncm_id_ncm) {
        $this->ncm_id_ncm = $ncm_id_ncm;
    }

    function setVolume_id_volume($volume_id_volume) {
        $this->volume_id_volume = $volume_id_volume;
    }

    function setGenero_id_genero($genero_id_genero) {
        $this->genero_id_genero = $genero_id_genero;
    }

    function setTributacao_id_tributacao($tributacao_id_tributacao) {
        $this->tributacao_id_tributacao = $tributacao_id_tributacao;
    }

    function setObservacao($observacao) {
        $this->observacao = $observacao;
    }


    
    
}