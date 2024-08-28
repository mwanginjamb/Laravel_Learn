<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;

    protected $table = 'vacancy_listings';
    protected $fillable = ['title', 'salary', 'employer_id'];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function Tags()
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey: "vacancy_listing_id");
    }
}
