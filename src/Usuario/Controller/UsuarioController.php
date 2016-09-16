<?php
namespace Pattern\Usuario\Controller;

use Pattern\Usuario\Repository\UsuarioRepository;

class UsuarioController
{

    public function get()
    {
        $usuario = new UsuarioRepository();
        echo "<pre>";
        var_dump($usuario->getUsuarioList());
    }
}
