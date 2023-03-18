<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

class OperationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $item = Item::all()->random();
        $amounts = collect([20, 15, 10, 5, 3, 1]);
        $type = operationTypes()->random();
        $amount = $amounts->random();

        if ($type === 'Desincorporación' && ($item->stock() - $amount < 0)) {
            $type = 'Ingreso';
        }

        return [
            'amount' => $amount,
            'type' => $type,
            'reason' => $type === 'Ingreso' ? null : 'Desgaste por uso', 
            'item_id' => $item->id,
        ];
    }
}
