<?php

use PDO;
use Pattern\Usuario\Controller\UsuarioController;
use PatternCore\FileReader\Custom\ConfigFileReader;

$fileReader = new ConfigFileReader(__DIR__."/../config.ini");
$defaultParser = $fileReader->get();

$namespace = "PatternCore\\Parsers\\".$defaultParser->parser;
$parser = new $namespace;

$conn = new PDO("mysql:host=127.0.0.1;dbname=colmeia", "root", "alisson299409");
$controller = new UsuarioController();
$result = $controller->get();

echo "<pre>";
var_dump($parser->encode(array("status"=>"200","data" => $result)));
