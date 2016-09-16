<?php
namespace PatternTest\Usuario\Model;

use PHPUnit\Framework\TestCase;
use Pattern\Usuario\Model\Usuario;

class UsuarioTest extends TestCase
{

    public function __construct()
    {
        parent::__construct();
    }
    
    /*
     * @dataProvider provider
     */
    public function testaSeCriaUsuario()
    {
        $usuario = new Usuario();
        $usuario->setNome("Alisson");
        
        $this->assertNotNull($usuario->getNome());
    }
    
    public function testaInsercaoStringNomeCorretamente()
    {
        $usuario = new Usuario();
        $usuario->setNome(" Alisson ");
        
        $this->assertNotEquals(" Alisson ", $usuario->getNome());
    }

    public function testaSeEncryptaSenha()
    {
        $usuario = new Usuario();
        $usuario->setSenha("9ntpw17jmentes");
        $this->assertNotEquals("9ntpw17jmentes", $usuario->getSenha());
        $this->assertEquals(md5("p5b502a99ntpw17jmentes"), $usuario->getSenha());
    }
}