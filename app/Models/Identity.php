<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identity extends Model
{
    use HasFactory;
    protected $table = 'identities';
    protected $fillable = [
        'name',
        'visa_number',
        'visa_issue_date',
        'visa_exp_date',
        'passport_number',
        'passport_issue_date',
        'passport_exp_date',      
        'father',
        'spouse',
        'bra',
        'clearance',
        'clearance_date',
        'registration_number',
        'image',
        'status',
    ];

    public static $statusArrays = ['active', 'inactive'];
}
