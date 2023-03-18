<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $type = payTypes()->random();

        $map = [
            'Pago Móvil' => randomNumericString(4),
            'Transferencia' => randomNumericString(10),
        ];

        $ref = $map[$type] ?? null;
        
        return [
            'ref' => $ref,
            'type' => $type,
        ];
    }
}
