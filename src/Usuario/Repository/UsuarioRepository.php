<?php
namespace Pattern\Usuario\Repository;

use PDO;
use Pattern\Connection;
use Pattern\Usuario\Model\Usuario;

class UsuarioRepository
{

    private $table = "usuarios";

    private $conn;

    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }

    public function getUsuarioList()
    {
        $row = $this->conn->prepare("SELECT * FROM " . $this->table);
        $row->execute();
        return $row->fetchAll(PDO::FETCH_ASSOC);
    }

    public function persist(Usuario $usuario)
    {
        $insert = $this->conn->prepare("INSERT INTO ".$this->table."('nome','login','senha','ativo') VALUES (?,?,?,?)");
        $insert->bindParam(1, $usuario->getNome());
        $insert->bindParam(2, $usuario->getLogin());
        $insert->bindParam(3, $usuario->getSenha());
        $insert->bindParam(4, $usuario->getAtivo());
        $insert->execute();
    }
}