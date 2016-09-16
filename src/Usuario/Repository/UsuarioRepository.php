<?php
namespace Pattern\Usuario\Repository;

use Pattern\Connection;
use PDO;
use Pattern\Usuario\Model\Usuario;

class UsuarioRepository
{

    private $table = "usuarios";

    private $conn;

    public function __construct()
    {
        $this->conn = Connection::getConnection();
    }

    public function getUsuarioList()
    {
        $row = $this->conn->prepare("SELECT * FROM " . $this->table);
        $row->execute();
        return $row->fetchAll(PDO::FETCH_ASSOC);
    }

    public function persist(Usuario $usuario)
    {
        
    }
}