<?php

namespace App\Factories;

use ReflectionClass;

class EntityFactory
{
    public function __construct(
        protected string $className
    ) { }
    
    public function create(object $attributes): object
    {
        $reflectionClass = new ReflectionClass('App\Entities\\' . $this->className);

        $instanceClass = $reflectionClass->newInstance();

        foreach ($attributes as $property => $value) {
            $reflectionProperty = $reflectionClass->getProperty($property);
            foreach ($reflectionProperty->getAttributes() as $attribute) {
                $validatedValue = $attribute->newInstance()
                                            ->validate($property, $value);

                $reflectionProperty->setAccessible(true);
                $reflectionProperty->setValue($instanceClass, $value);
            }
        }

        return $instanceClass;
    }
}
