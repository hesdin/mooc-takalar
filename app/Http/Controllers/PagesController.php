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
        $categories = CourseCategory::with(['courses' => function ($query) {
            $query->whereHas('preTest');
        }])
            ->whereHas('courses', function ($query) {
                $query->whereHas('preTest');
            })
            ->take(4)
            ->get();


        $categoryIdsWithMostCourses = $categories->pluck('id');

        $all_courses = Course::has('preTest')->whereIn('category_id', $categoryIdsWithMostCourses)->get();

        $latest_courses = Course::has('preTest')->orderBy('created_at', 'desc')->take(12)->get();

        $instructors = Instructor::with('courses')
            ->has('courses')
            ->take(5)
            ->get();

        return view('user.pages.home', compact('categories', 'all_courses', 'latest_courses', 'instructors'));
    }

    public function courseDetail($uuid)
    {
        // Menggunakan UUID kursus untuk mencari kursus berdasarkan UUID
        $course = Course::where('uuid', $uuid)->first();


        // Jika kursus ditemukan, tampilkan data ke view
        if ($course) {
            return view('user.pages.course_detail', ['course' => $course]);
        }

        // Jika kursus tidak ditemukan, redirect ke halaman error atau berikan respon sesuai kebutuhan aplikasi
        return redirect()->route('error.page');

        return view('user.pages.course_detail');
    }

    public function courseAll(Request $request)
    {
        // Mengambil semua kategori kursus
        $categories = CourseCategory::all();

        // Mendapatkan kategori yang dipilih dari input
        $selectedCategory = $request->input('category');

        // Mendapatkan kata kunci pencarian dari input
        $search = $request->input('search');

        // Mendapatkan opsi pengurutan dari input
        $orderBy = $request->input('order_by');

        // Membuat objek query builder untuk model Course
        $query = Course::query();

        // Memfilter berdasarkan kategori yang dipilih jika tidak kosong
        if (!empty($selectedCategory)) {
            $query->where('category_id', $selectedCategory);
        }

        // Mencari kata kunci pencarian di judul dan deskripsi jika tidak kosong
        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'LIKE', "%{$search}%")
                    ->orWhere('description', 'LIKE', "%{$search}%");
            });
        }

        // Mengurutkan berdasarkan opsi pengurutan yang dipilih jika tidak kosong
        if (!empty($orderBy)) {
            if ($orderBy === 'terbaru') {
                $query->orderBy('created_at', 'desc');
            } elseif ($orderBy === 'terpopuler') {
                // Menghitung jumlah pendaftaran pada setiap kursus
                $query->withCount('enrollment')->orderBy('enrollment_count', 'desc');
            }
        }

        // Menjalankan query dan mendapatkan hasil kursus
        $courses = $query->get();

        return view('user.pages.all_course', compact('categories', 'courses', 'selectedCategory', 'search', 'orderBy'));
    }
}
