<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $fillable = [
        'date',
        'name',
        'age',
        'mobile',
        'email',
        'student',
        'graduation_year',
        'employee',
        'why_attend',
        'why_choose_you',
        'expectations',
        'suggestions',
        'know_about_us',
        'hear_organization',
        'id',
        'status',
    ];

    protected  $table = "subscribers";
    public  $timestamps= false;
}
