<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['operations', 'loans'];

    public function operations()
    {
        return $this->hasMany(Operation::class);
    }
    
    public function loans()
    {
        return $this->hasMany(Loan::class);
    }

    public static function getOptions()
    {
        $items = self::all(['id', 'name']);

        $options = $items->mapWithKeys(function ($item) {
            return [$item->id => $item->name];
        })->all();

        return $options;
    }

    public static function optionsAndStock()
    {
        $data = new \stdClass;

        $items = self::all()->reject(function ($item) {
            return $item->stock() < 1;
        });

        $data->stock = $items->mapWithKeys(function ($item) {
            return [$item->id => $item->stock()];
        });

        $data->options = $items->mapWithKeys(function ($item) {
            return [$item->id => $item->name];
        });

        return $data;
    }

    public function getStockAttribute()
    {
        $amount = $this->stock();
        return "{$amount} unidades.";
    }
    
    public function getTotalStockAttribute()
    {
        $amount = $this->stock(true);
        return "{$amount} unidades.";
    }

    public function stock($total = false)
    {
        if ($this->operations->count() < 1) {
            return 0;
        }

        $amount = $this->operations->reduce(function ($carry, $operation) {
            if ($operation->type === 'Ingreso') {
                return $carry + $operation->amount;
            }

            return $carry - $operation->amount;
        }, 0);
        
        if ($total) return $amount;

        $loans = Loan::where('item_id', $this->id)
            ->whereNull('returned_at')->get();

        $lend = $loans->reduce(function ($carry, $loan) {
            return $carry + $loan->amount;
        });

        return $amount - $lend;
   }
}
