<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::latest()
            ->paginate(10)
            ->withQueryString();

        return view('courses.index', [
            'courses' => $courses,
        ]);
    }

    public function enrollments(Request $request)
    {
        $course = Course::findOrFail($request->query('course'));
        
        $enrollments = Enrollment::whereBelongsTo($course)
            ->latest()
            ->paginate(10)
            ->withQueryString();
        
        return view('courses.enrollments', [
            'course' => $course,
            'enrollments' => $enrollments,
        ]);
    }
}
