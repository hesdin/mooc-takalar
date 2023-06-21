<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\Instructor;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $categories = CourseCategory::with('courses')
            ->has('courses')
            // ->orderByDesc('courses_count')
            ->take(4)
            ->get();

        $categoryIdsWithMostCourses = $categories->pluck('id');

        $all_courses = Course::whereIn('category_id', $categoryIdsWithMostCourses)->get();

        $latest_courses = Course::orderBy('created_at', 'desc')->take(12)->get();

        $instructors = Instructor::with('courses')
            ->has('courses')
            ->take(5)
            ->get();

        return view('user.pages.home', compact('categories', 'all_courses', 'latest_courses', 'instructors'));
    }

    public function courseDetail($id)
    {
        // Menggunakan ID kursus untuk mencari kursus berdasarkan UUID
        $course = Course::where('id', $id)->first();

        // Jika kursus ditemukan, tampilkan data ke view
        if ($course) {
            return view('user.pages.course_detail', ['course' => $course]);
        }

        // Jika kursus tidak ditemukan, redirect ke halaman error atau berikan respon sesuai kebutuhan aplikasi
        return redirect()->route('error.page');

        return view('user.pages.course_detail');
    }
}
