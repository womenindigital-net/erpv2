<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ReportingMemo extends Model
{
    use HasFactory;

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class,'name','id');
    }

    public function dep(): BelongsTo{
        return $this->belongsTo(DepartmentSetup::class,'department','id');
    }
}
