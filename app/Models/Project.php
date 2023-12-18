<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
        'type',
        'status',
        'start_date',
        'end_date',
        'detail',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
    ];
}
