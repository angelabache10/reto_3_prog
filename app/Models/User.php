<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Membership;
use App\Models\Enrollment;
use App\Models\Shared\QueryScopes;

class User extends Authenticatable
{
    use HasFactory, Notifiable, QueryScopes;

    /**
     * The attributes that are not mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'birth' => 'datetime',
    ];

    protected $search = ['first_name', 'second_name', 'first_lastname', 'second_lastname'];

    /**
     * Get all the memberships of a Student.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function memberships()
    {
        return $this->hasMany(Membership::class);
    }

    public function joinedClubs()
    {
        return $this->belongsToMany(Club::class, 'memberships');
    }

    public function enrolledCourses()
    {
        return $this->belongsToMany(Course::class, 'enrollments')
            ->wherePivotNull('deleted_at');
    }

    public function payments()
    {
        return $this->hasManyThrough(Payment::class, Enrollment::class);
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    public function clubs()
    {
        return $this->hasMany(Club::class);
    }

    public function dictatedCourses()
    {
        return $this->hasMany(Course::class);
    }

    public function dictatedClubs()
    {
        return $this->hasMany(Club::class);
    }

    /** --------------- Query Scopes --------------- */

    public function scopeInstructors($query)
    {
        return $query->where('role', 'Instructor');
    }

    public function scopeStudents($query)
    {
        return $query->where('role', 'Estudiante');
    }

    public function scopeExcludeAdmin($query)
    {
        return $query->where('role', '!=', 'Administrador');
    }

    /** --------------- Accesors and Mutators --------------- */

    public function getNamesAttribute()
    {
        return "{$this->first_name} {$this->second_name}";
    }

    public function getLastnamesAttribute()
    {
        return "{$this->first_lastname} {$this->second_lastname}";
    }

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->first_lastname}";
    }

    public function getUptaAttribute()
    {
        return $this->is_upta ? 'Sí' : 'No';
    }

    public function getAgeAttribute()
    {
        return now()->year - $this->birth->year;
    }

    public function getFullCiAttribute()
    {
        $reverseCi = str_split(strrev($this->ci));
        $length = count($reverseCi);
        array_splice($reverseCi, 3, 0, '.');
        if ($length > 6) {
            array_splice($reverseCi, 7, 0, '.');
        }
        $ci = strrev(implode($reverseCi));

        return "{$this->ci_type}-{$ci}";
    }

    public function getTelAttribute()
    {
        $phone = str_split($this->phone);
        array_splice($phone, 4, 0, '-');
        return implode($phone);
    }

    public function getImageAttribute($image)
    {
        return $image ?? 'img/user-placeholder.png';
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public static function getOptions($role = null)
    {
        $cols = ['id', 'first_name', 'first_lastname'];
        $users = null;

        if ($role) {
            $users = User::where('role', $role)->get($cols);
        } else {
            $users = User::all($cols);
        }

        $options = $users->mapWithKeys(function ($user) {
            return [$user->id => $user->full_name];
        })->sortKeys()->all();

        return $options;
    }
}
