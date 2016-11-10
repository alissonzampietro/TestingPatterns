<?php

namespace PatternCore\Parsers;

class ObjectParser implements Parser
{
    public function decode($data)
    {
        
    }
    
    public function encode($data)
    {
        if(!is_array($data))
            throw new \Exception("O parser deve receber um array");
        $object = new \stdClass();
        foreach($data as $key => $value)
        {
            $object->$key = $value;
        }
        return $object;
    }
}