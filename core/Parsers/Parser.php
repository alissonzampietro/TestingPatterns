<?php

namespace PatternCore\Parsers;

interface Parser {
    public function encode($data);
    
    public function decode($data);
}