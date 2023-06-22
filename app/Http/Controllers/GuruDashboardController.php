<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Gtk;
use Illuminate\Http\Request;

class GuruDashboardController extends Controller
{
    public function index()
    {
        $courses = Course::latest()->limit(4)->get();
        return view('user.dashboard.index', compact('courses'));
    }

    public function myCourse()
    {
        $guru = Gtk::find(auth()->guard('guru')->user()->id);

        $enrollments = $guru->enrollments()->with('course')->get();

        return view('user.dashboard.my_course', compact('enrollments'));
    }

    public function allCourse()
    {
        $courses = Course::latest()->get();
        return view('user.dashboard.all_course', compact('courses'));
    }
}
