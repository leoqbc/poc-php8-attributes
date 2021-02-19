<?php

namespace App\Factories;

class EntityFactory
{
    public function __construct(
        protected string $className
    ) { }
    
    public function create(object $attributes): object
    {
        return new \StdClass();
    }
}
