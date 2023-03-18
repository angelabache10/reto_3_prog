<?php

namespace App\Gates;

use App\Models\Membership;
use App\Models\User;

class UserMembershipGates extends Gates
{
    protected static $prefix = 'users.memberships';

    public function viewAny(User $user, User $model)
    {
        return $user->can('role', 'Estudiante')
            && $model->id === $user->id;
    }

    public function view(User $user, Membership $membership)
    {
        return $user->can('role', 'Estudiante')
            && $membership->student->id === $user->id;
    }
}