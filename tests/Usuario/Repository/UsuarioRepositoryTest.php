<?php
namespace PatternTest\Usuario\Repository;

use PHPUnit\Framework\TestCase;
use Pattern\Usuario\Model\Usuario;

class UsuarioRepository extends TestCase
{

    public function testaSeCadastraUsuarioNoBanco()
    {
        $usuario = new Usuario();
        $usuario->setNome("Alisson Zampietro");
        $stub = $this->getMockBuilder("UsuarioRepository")->getMock();
        $stub->expects($this->once())->method("persist")->willReturn($usuario->getNome());
        
        $this->assertEquals($usuario->getNome(), $stub->persist());
    }
}