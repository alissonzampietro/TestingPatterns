<?php
namespace Pattern\Usuario\Repository;

use Pattern\Connection;
use PDO;
use Pattern\Usuario\Model\Usuario;

class UsuarioRepository
{
    
    private $table = "usuarios";

    public function getUsuarioList()
    {
         $conn = Connection::getConnection();
         $row = $conn->prepare("SELECT * FROM ".$this->table);
         $row->execute();
         return $row->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function persist()
    {
        $usuario = new Usuario();
        $usuario->setNome($_POST['nome']);
        $usuario->setLogin($_POST['login']);
        $usuario->setSenha($_POST['senha']);
    }
}