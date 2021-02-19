<?php

use App\Factories\EntityFactory;

require __DIR__ . '/vendor/autoload.php';

// use App\Entities\Payment;

// ===============================
// $payment = new Payment();

// $payment->setIntallments(11);

// $payment->setAmount(0);
// ===============================

// O desafio é remover os setters da classe Payment
// e implementar a classe EntityFactory para valide
// e traga a instancia correta
$entityFactory = new EntityFactory('Payment');

$payment = $entityFactory->create((object)[
    'installments' => 12,
    'amount' => 0
]);

var_dump($payment);
