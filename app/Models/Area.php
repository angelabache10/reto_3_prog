<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function instructors()
    {
        return $this->hasMany(User::class);
    }

    public function pnf()
    {
        return $this->belongsTo(PNF::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public static function getOptions()
    {
        $areas = self::all(['id', 'name']);

        $options = $areas->mapWithKeys(function ($area) {
            return [$area->id => $area->name];
        })->all();

        return $options;
    }
}
