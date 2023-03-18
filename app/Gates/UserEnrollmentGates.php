<?php

namespace App\Gates;

use App\Models\Enrollment;
use App\Models\User;

class UserEnrollmentGates extends Gates
{
    protected static $prefix = 'users.enrollments';

    public function viewAny(User $user, User $model)
    {
        return $user->can('role', 'Estudiante')
            && $model->id === $user->id;
    }

    public function view(User $user, Enrollment $enrollment)
    {
        return $user->can('role', 'Estudiante')
            && $enrollment->student->id === $user->id;
    }
}