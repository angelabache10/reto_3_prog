<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Item;
use App\Models\Membership;
use App\Models\Payment;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function enrollment(Enrollment $enrollment)
    {
        $this->authorize('pdf.enrollment', $enrollment);

        return $this->generatePDF([
            'view' => 'enrollment',
            'landscape' => false,
            'filename' => "{$enrollment->student->full_name} - Planilla de Inscripción.pdf",
            'student' => $enrollment->student,
            'course' => $enrollment->course,
            'expires' => $enrollment->course->end_ins->format(DF),
        ]);
    }

    public function enrollments(Request $request)
    {
        $course = Course::with('instructor')
            ->findOrFail($request->query('course'));
            
        $this->authorize('pdf.enrollments', $course);

        $enrollments = Enrollment::latest()
            ->whereBelongsTo($course)
            ->get();

        return $this->generatePDF([
            'view' => 'enrollments',
            'filename' => "{$course->name} - Matrícula.pdf",
            'enrollments' => $enrollments,
            'course' => $course,
        ]);
    }

    public function payments()
    {
        $this->authorize('role', 'Administrador');

        $payments = Payment::with('enrollment.course', 'enrollment.student')
            ->get();
        
        return $this->generatePDF([
            'view' => 'payments',
            'filename' => 'Reporte de Pagos - Vinculación Social.pdf',
            'payments' => $payments,
        ]);
    }

    public function items()
    {
        $this->authorize('role', 'Administrador');

        $items = Item::latest()
            ->with('operations')
            ->paginate(10)
            ->withQueryString();
        
        return $this->generatePDF([
            'view' => 'items',
            'filename' => 'Estado de Inventario - Vinculación Social.pdf',
            'items' => $items,
        ]);
    }

    public function certificate(Enrollment $enrollment)
    {
        $this->authorize('pdf.certificate', $enrollment);

        return $this->generatePDF([
            'view' => 'certificate',
            'filename' => "{$enrollment->student->full_name} - Certificado de Aprobación.pdf",
            'student' => $enrollment->student,
            'course' => $enrollment->course,
            'bg' => base64('img/certificate-bg.png'),
        ]);
    }

    public function memberships(Request $request)
    {
        $club = Club::with('instructor')
            ->findOrFail($request->query('club'));

        $this->authorize('pdf.memberships', $club);

        $memberships = Membership::latest()
            ->whereBelongsTo($club)
            ->get();
        
        return $this->generatePDF([
            'view' => 'memberships',
            'filename' => "{$club->name} - Miembros.pdf",
            'memberships' => $memberships,
            'club' => $club,
        ]);
    }

    protected function generatePDF($options)
    {
        $options['landscape'] = $options['landscape'] ?? true;
        $options['date'] = now()->format(DF);
        $options['logo'] = base64('img/logo-upta.png');
        $filename = $options['filename'];

        $data = collect($options)
            ->except(['view', 'landscape', 'fipdf.lename']);

        $pdf = PDF::loadView("pdf.{$options['view']}", $data->all());
        
        if ($options['landscape']) {
            $pdf->setPaper('a4', 'landscape');
        }

        $path = public_path($filename);
        $pdf->save($filename);
        
        return response()
            ->download($path)
            ->deleteFileAfterSend();
    }
}
