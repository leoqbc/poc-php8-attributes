<?php

namespace App\Validation;

use Attribute;
use App\Validation\Exceptions\AttributeException;
use App\Validation\Interfaces\Validation;

#[Attribute(Attribute::TARGET_PROPERTY)]
class GreaterThan implements Validation
{
    public function __construct(
        protected float $definedValue
    ) { }

    public function validate(string $propertyName, mixed $value): mixed
    {
        if ($value <= $this->definedValue) {
            throw new AttributeException("$value cannot be lower than $this->definedValue");
        }
        return $value;
    }
}
