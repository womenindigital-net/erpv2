<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\VocationalEvalutionDetail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VocationalEvalution extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function details(): HasMany
    {
        return $this->hasMany(VocationalEvalutionDetail::class);
    }
}
