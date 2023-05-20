<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentAttendance extends Model
{
    use HasFactory;


    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
