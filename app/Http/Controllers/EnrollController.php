<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollController extends Controller
{
    public function enrollment($uuid)
    {
        $course = Course::where('uuid', $uuid)->first();

        if ($course) {
            $enrollment = new Enrollment();
            $enrollment->gtk_id = auth()->guard('guru')->user()->id;
            $enrollment->course_id = $course->id;
            $enrollment->save();

            return redirect()->route('guru.mycourse');
        }

        dd('gagal');
    }
}
