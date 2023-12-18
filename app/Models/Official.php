<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Official extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'position',
        'sex',
        'date_of_birth',
        'national_id_number',
        'address',
        'telephone',
        'whatsapp_number',
        'email',
        'school',
        'company',
        'designation',
        'special_abilities',
        'overseas_employment_plan',
        'service_to_society',
        'personal_life_vision',
        'political_involvement',
        'photo',
    ];

}
