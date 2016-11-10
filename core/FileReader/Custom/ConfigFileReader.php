<?php
namespace PatternCore\FileReader\Custom;

use PatternCore\FileReader\FileReader;

class ConfigFileReader implements FileReader
{

    private $content;

    public function __construct($file)
    {
        $this->set($file);
    }

    public function get()
    {
        $file = json_decode($this->content);
        return $file->config;
    }
    
    public function set($file)
    {
        $this->content = file_get_contents($file);
    }
}