<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Subject;

class Student_result extends Model
{
    use HasFactory;

    public function student() {
        return $this->hasOne(Student::class);

    }
    public function subject() {
        return $this->hasOne(Subject::class);

    }
}
