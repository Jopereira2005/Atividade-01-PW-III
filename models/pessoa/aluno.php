<?php

namespace Pessoa;

class Aluno {
    private $codigo;
    private $nome;
    private $email = array();
    private $telefone = array();
    private $endereco = array();

    
    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }
    function setEmail($email) {
        $this->email[] = $email;
    }
    function setTelefone($telefone) {
        $this->telefone[] = $telefone;
    }
    function setEndereco($endereco) {
        $this->endereco[] = $endereco;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getEndereco() {
        return $this->endereco;
    }
}

?>