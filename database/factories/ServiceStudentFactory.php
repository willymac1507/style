<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\Student;
use App\Models\ServiceStudent;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceStudentFactory extends Factory
{
    protected $model = ServiceStudent::class;

    public function definition(): array
    {
        return [
            'student_id' => Student::factory(),
            'service_id' => Service::factory()
        ];
    }
}
