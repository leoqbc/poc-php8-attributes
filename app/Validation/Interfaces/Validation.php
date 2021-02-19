<?php

namespace App\Validation\Interfaces;

interface Validation
{
    public function validate(string $propertyName, mixed $value): mixed;
}
