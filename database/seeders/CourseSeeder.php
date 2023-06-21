<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Instructor;
use App\Models\CourseCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Buat beberapa kategori
        $categories = CourseCategory::factory()->count(5)->create();

        // Buat beberapa instruktur
        $instructors = Instructor::factory()->count(10)->create();

        // Buat beberapa kursus dengan relasi ke kategori dan instruktur yang sudah ada
        Course::factory()
            ->count(20)
            ->create()
            ->each(function ($course) use ($categories, $instructors) {
                $course->category_id = $categories->random()->id;
                $course->instructor_id = $instructors->random()->id;
                $course->save();
            });
    }
}
