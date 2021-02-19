<?php

namespace App\Entities;

use App\Validation\GreaterThan;
use App\Validation\LowerThan;

class Payment
{
    #[GreaterThan(0), LowerThan(13)]
    protected int $installments;

    
    #[GreaterThan(0)]
    protected float $amount;
}
