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
            'filename' => "ReportePDFMatrículaSistemaVinculaciónSocial.pdf",
            'enrollments' => $enrollments,
            'course' => $course,
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
            'filename' => 'ReportePDFInventarioSistemaVinculaciónSocial.pdf',
            'items' => $items,
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
            'filename' => "ReportePDFMiembrosSistemaVinculaciónSocial.pdf",
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
