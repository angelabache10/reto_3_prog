<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enrollment extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $with = ['payments', 'student', 'course'];

    public function student()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function payments()
    {   
        return $this->hasMany(Payment::class);
    }

    public function canDownloadCertificate()
    {
        return $this->solvency === 'Solvente'
            && $this->status === 'Inscrito'
            && $this->approval === 'Aprobado';
    }

    public function getSolvencyAttribute()
    {
        $solvency = $this->payments->every(function ($payment) {
            return $payment->status === 'Confirmado';
        });

        return $solvency ? 'Solvente' : 'Pendiente';
    }

    // IMPROVE -> 3
    public function getStatusAttribute()
    {
        if ($this->confirmed_at !== null) {
            return 'Inscrito';
        } else {
            return 'En reserva';
        }
    }

    public function getExpiresAtAttribute()
    {
        return $this->course->end_ins;
    }
}
