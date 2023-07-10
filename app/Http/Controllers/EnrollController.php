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
            $guruId = auth()->guard('guru')->user()->id;

            // Cek apakah pengguna guru sudah melakukan enroll di course ini
            $isEnrolled = Enrollment::where('course_id', $course->id)
                ->where('gtk_id', $guruId)
                ->exists();

            if ($isEnrolled) {
                return redirect()->route('guru.mycourse');
            }

            $enrollment = new Enrollment();
            $enrollment->gtk_id = $guruId;
            $enrollment->course_id = $course->id;
            $enrollment->save();

            return redirect()->route('guru.mycourse')->with('success', 'Kamu berhasil mendaftar !');
        }
    }
}
