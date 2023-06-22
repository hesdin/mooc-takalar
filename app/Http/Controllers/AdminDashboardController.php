<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Gtk;
use App\Models\Instructor;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $guru = Gtk::count();
        $instruktur = Instructor::count();
        $kursus = Course::count();

        $instructors = Instructor::withCount('courses')
            ->orderByDesc('courses_count')
            ->limit(5)
            ->get();


        return view('admin.dashboard.index', compact('guru', 'instruktur', 'kursus', 'instructors'));
    }
}
