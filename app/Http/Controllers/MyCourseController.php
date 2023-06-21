<?php

namespace App\Http\Controllers;

use App\Models\Gtk;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class MyCourseController extends Controller
{
    public function myCourse()
    {
        $guru = Gtk::find(auth()->guard('guru')->user()->id);

        $enrollments = $guru->enrollments()->with('course')->get();

        return view('user.my_course', compact('enrollments'));
    }
}
