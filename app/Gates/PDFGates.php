<?php

namespace App\Gates;

use App\Models\Club;
use App\Models\Course;
use App\Models\Enrollment;
use App\Models\User;

class PDFGates extends Gates
{
    protected static $prefix = 'pdf';

    public function enrollment(User $user, Enrollment $enrollment)
    {
        return $user->can('role', 'Estudiante')
            && $enrollment->student->id === $user->id
            && $enrollment->course->phase === 'Inscripciones' 
            && $enrollment->status === 'En reserva';
    }

    public function enrollments(User $user, Course $course = null)
    {
        if ($user->can('role', 'Administrador')) return true;

        $course = $course ?? Course::findOrFail(request()->query('course'));

        return $user->can('role', 'Instructor')
            && $course->instructor->id === $user->id;
    }

    public function certificate(User $user, Enrollment $enrollment)
    {
        return $user->can('role', 'Estudiante') 
            && $enrollment->student->id === $user->id
            && $enrollment->canDownloadCertificate();
    }

    public function memberships(User $user, Club $club = null)
    {
        if ($user->can('role', 'Administrador')) return true;

        $club = $club ?? Club::findOrFail(request()->query('club'));

        return $user->can('role', 'Instructor')
            && $club->instructor->id === $user->id;
    }
}
