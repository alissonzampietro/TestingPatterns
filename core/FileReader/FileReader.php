<?php
namespace PatternCore\FileReader;

interface FileReader
{

    public function get();

    public function set($file);
}