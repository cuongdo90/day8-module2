<?php

use phpDocumentor\Reflection\Types\Boolean;

class MyList
{
    public int $size;
    public array $elements;

    public function insert($index, $obj): void
    {

    }

    public function add($obj): void
    {
        array_Push($this->list, $obj);
    }

    public function remove($index): void
    {

    }

    public function get($index): void 
    {

    }
    

    public function clear(): void
    {

    }

   
    

}