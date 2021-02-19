<?php

namespace App\Validation\Interfaces;

interface Validation
{
    public function validate(mixed $value): mixed;
}
