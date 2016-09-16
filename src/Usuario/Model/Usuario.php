<?php
namespace Pattern\Usuario\Model;

class Usuario
{

    private $nome;

    private $login;

    private $senha;

    private $ativo;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = filter_var(trim($nome),FILTER_SANITIZE_STRING);
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = trim($login);
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = md5("p5b502a9".trim($senha));
    }

    public function getAtivo()
    {
        return $this->ativo;
    }

    public function setAtivo($ativo)
    {
        $this->ativo = trim($ativo);
    }
}
