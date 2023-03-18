<?php

namespace App\Models;

use App\Events\LoanEvent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'returned_at' => 'datetime',
    ];

    public function club()
    {
        return $this->belongsTo(Club::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function getStatusAttribute()
    {
        if ($this->returned_at !== null) {
            return 'Devuelto';
        } else {
            return 'Prestado';
        }
    }

    public function getFullAmountAttribute()
    {
        return "{$this->amount} unidades";
    }

    public function getReturnDateAttribute()
    {
        if ($this->returned_at !== null) {
            return $this->returned_at->format(DF);
        } else {
            return '----';
        }
    }
}
