<?php

namespace PatternCore\Parsers;

class JsonParser implements Parser
{
    public function encode($data)
    {
        return json_encode($data);
    }
    
    public function decode($data)
    {
        return json_decode($data);
    }
}