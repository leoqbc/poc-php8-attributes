<?php

namespace App\Entities;

use App\Validation\Exceptions\AttributeException;

class Payment
{
    // Parcelas
    protected int $installments;

    // Custo total da compra
    protected float $amount;

    public function setIntallments(int $installments)
    {
        if ($installments <= 0) {
            throw new AttributeException("Installment can be less than 0");
        }

        if ($installments > 12) {
            throw new AttributeException("Installment can be greater than 12");
        }
        $this->installments = $installments;
    }

    public function setAmount(float $amount)
    {
        if ($amount <= 0) {
            throw new AttributeException("Amount can be less than 0");
        }
        $this->amount = $amount;
    }
}
