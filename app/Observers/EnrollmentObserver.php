<?php

namespace App\Observers;

use App\Models\Enrollment;

class EnrollmentObserver
{
    /**
     * Handle the Enrollment "deleted" event.
     *
     * @param  \App\Models\Enrollment  $enrollment
     * @return void
     */
    public function deleted(Enrollment $enrollment)
    {
        $enrollment->payments->each(function ($payment) {
            return $payment->delete();
        });
    }

    /**
     * Handle the Enrollment "restored" event.
     *
     * @param  \App\Models\Enrollment  $enrollment
     * @return void
     */
    public function restored(Enrollment $enrollment)
    {
        $enrollment->payments->each(function ($payment) {
            return $payment->restore();
        });
    }
}
