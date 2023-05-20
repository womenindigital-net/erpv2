<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignTaskDetail extends Model
{
    use HasFactory;

    public function task(){
        return $this->belongsTo(\App\Models\Task::class);
    }
}
