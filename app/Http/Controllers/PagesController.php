<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $categories = CourseCategory::withCount('courses')
            ->whereHas('courses')
            ->orderBy('courses_count', 'desc')
            ->take(4)
            ->get();

        $categoryIdsWithMostCourses = $categories->pluck('id');

        $courses = Course::whereIn('category_id', $categoryIdsWithMostCourses)
            ->get();
        // dd($courses);

        $all_courses = $courses->concat(Course::whereNotIn('category_id', $categoryIdsWithMostCourses)->get());

        return view('user.pages.home', compact('categories', 'courses', 'all_courses'));
    }
}
