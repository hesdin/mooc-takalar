<?php

namespace App\Http\Controllers;

use App\Models\Gtk;
use App\Models\Instructor;
use Illuminate\Http\Request;

class InstrukturDashboardController extends Controller
{
    public function index()
    {
        $instructorId = auth()->guard('instruktur')->user()->id;

        $instructor = Instructor::find($instructorId);

        $courses = $instructor->courses;

        $enrollmentIds = [];

        foreach ($courses as $course) {
            $enrollmentIds = array_merge($enrollmentIds, $course->enrollment()->pluck('id')->toArray());
        }

        $gtks = Gtk::whereHas('enrollments', function ($query) use ($enrollmentIds) {
            $query->whereIn('id', $enrollmentIds);
        })->get();


        return view('instruktur.dashboard.index', compact('gtks'));
    }
}
