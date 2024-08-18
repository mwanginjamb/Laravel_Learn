<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job
{
    use HasFactory;

    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Lab Technician',
                'salary' => 34000
            ],
            [
                'id' => 2,
                'title' => 'Principle Scientist',
                'salary' => 44000
            ],
            [
                'id' => 3,
                'title' => 'Principle Data Scientist',
                'salary' => 54000
            ],
        ];
    }

    public static function find(int $id): array
    {
        $job =  Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (!$job) {
            abort(404);
        }

        return $job;
    }
}
