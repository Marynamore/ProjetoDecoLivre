<?php

class PassagensDTO {
    private $id_passagens;
    private $nome_pass;
    private $link_pass;
    private $origem_pass;
    private $destino_pass;
    private $valor_pass;
    private $dt_inicio_pass;
    private $dt_fim_pass;
    private $nacional_pass;
    private $internacional_pass;
    private $situacao_pass;
    private $curtir_pass;
    private $avaliacao_pass;
    private $img_pass;

    public function getId_passagens() {
        return $this->id_passagens;
    }

    public function getNome_pass() {
        return $this->nome_pass;
    }

    public function getLink_pass() {
        return $this->link_pass;
    }

    public function getOrigem_pass() {
        return $this->origem_pass;
    }

    public function getDestino_pass() {
        return $this->destino_pass;
    }

    public function getValor_pass() {
        return $this->valor_pass;
    }

    public function getDt_inicio_pass() {
        return $this->dt_inicio_pass;
    }

    public function getDt_fim_pass() {
        return $this->dt_fim_pass;
    }

    public function getNacional_pass() {
        return $this->nacional_pass;
    }

    public function getInternacional_pass() {
        return $this->internacional_pass;
    }

    public function getSituacao_pass() {
        return $this->situacao_pass;
    }

    public function getCurtir_pass() {
        return $this->curtir_pass;
    }

    public function getAvaliacao_pass() {
        return $this->avaliacao_pass;
    }

    public function getImg_pass() {
        return $this->img_pass;
    }

    public function setId_passagens($id_passagens) {
        $this->id_passagens = $id_passagens;
    }

    public function setNome_pass($nome_pass) {
        $this->nome_pass = $nome_pass;
    }

    public function setLink_pass($link_pass) {
        $this->link_pass = $link_pass;
    }

    public function setOrigem_pass($origem_pass) {
        $this->origem_pass = $origem_pass;
    }

    public function setDestino_pass($destino_pass) {
        $this->destino_pass = $destino_pass;
    }

    public function setValor_pass($valor_pass) {
        $this->valor_pass = $valor_pass;
    }

    public function setDt_inicio_pass($dt_inicio_pass) {
        $this->dt_inicio_pass = $dt_inicio_pass;
    }

    public function setDt_fim_pass($dt_fim_pass) {
        $this->dt_fim_pass = $dt_fim_pass;
    }

    public function setNacional_pass($nacional_pass) {
        $this->nacional_pass = $nacional_pass;
    }

    public function setInternacional_pass($internacional_pass) {
        $this->internacional_pass = $internacional_pass;
    }

    public function setSituacao_pass($situacao_pass) {
        $this->situacao_pass = $situacao_pass;
    }

    public function setCurtir_pass($curtir_pass) {
        $this->curtir_pass = $curtir_pass;
    }

    public function setAvaliacao_pass($avaliacao_pass) {
        $this->avaliacao_pass = $avaliacao_pass;
    }

    public function setImg_pass($img_pass) {
        $this->img_pass = $img_pass;
    }

}
