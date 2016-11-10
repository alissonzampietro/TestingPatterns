<?php
namespace Pattern\Usuario\Controller;

use Pattern\Usuario\Repository\UsuarioRepository;
use Pattern\Usuario\Model\Usuario;
use PatternCore\Parsers\JsonParser;

class UsuarioController
{

    public function get()
    {
        $usuario = new UsuarioRepository();
        return $usuario->getUsuarioList();
    }
    
    public function post()
    {
        $usuario = new Usuario();
        $usuario->setNome($_POST['nome']);
        $usuario->setLogin($_POST['login']);
        $usuario->setSenha($_POST['senha']);
        $usuario->setAtivo(1);
    }
}
