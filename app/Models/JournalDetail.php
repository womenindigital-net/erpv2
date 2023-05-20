<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JournalDetail extends Model
{
    use HasFactory;

    protected $fillable = ['account_no', 'account_particulars', 'debit', 'credit'];
    protected $guarded = ['id'];
}
