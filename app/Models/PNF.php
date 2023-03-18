<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PNF extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'pnfs';

    public static function getOptions()
    {
        $pnfs = self::all(['id', 'name']);

        $options = $pnfs->mapWithKeys(function ($pnf) {
            return [$pnf->id => $pnf->name];
        })->sortKeys()->all();
            
        return $options;
    }
}
