<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Shared\QueryScopes;

class Club extends Model
{
    use HasFactory, QueryScopes;

    protected $guarded = [];

    protected $search = ['name'];

    protected $casts = [
        'start_hour' => 'datetime',
        'end_hour' => 'datetime',
    ];

    protected $withCount = ['members'];

    public function instructor()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function members()
    {
        return $this->belongsToMany(User::class, 'memberships');
    }

    public function memberships()
    {
        return $this->belongsTo(Membership::class);
    }

    public function loans()
    {
        return $this->hasMany(Loan::class);
    }

    public function scopeNotJoinedBy($query, $user)
    {
        $ids = $user
            ->joinedClubs
            ->modelKeys();

        $query->whereNotIn('id', $ids);
    }

    public function scopeJoinedBy($query, $user)
    {
        $ids = $user
            ->joinedClubs
            ->modelKeys();
        
        $query->whereIn('id', $ids);
    }

    public function getHourAttribute()
    {
        return "{$this->start_hour->format(TF)} a {$this->end_hour->format(TF)}";
    }

    public function getExcerptAttribute()
    {
        return str($this->description)->words(8);
    }

    public static function getOptions()
    {
        $clubs = self::all(['id', 'name']);

        $options = $clubs->mapWithKeys(function ($club) {
            return [$club->id => $club->name];
        })->all();

        return $options;
    }
}
