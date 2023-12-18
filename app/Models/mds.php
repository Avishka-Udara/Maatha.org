<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mds extends Model
{
    use HasFactory;
    protected $fillable = [
        'District','Divisional_Secretariat','Grama_Niladhari_Division','Grama_Niladhari_Division_Number','Village','Office_Address','Contact_person','Position','Contact_number','WhatsApp_number','Religious_Authority','Grama_Niladhari','Minutes_with_members_signature_list','Prioritized_project_proposal','President','Secretory','Treasurer','Assistant_treasurer','Agriculture_Coordinator','Vocational_Training_and_Entrepreneurship_Coordinator','English_language_and_Education_Coordinator','mitcordinator','Entertainment_and_Reconciliation_Coordinator','Health_Promotion_Coordinator','Women_affaires_and_child_development_Coordinator','image',
    ];

    public function officials()
    {
        return $this->hasMany(Official::class);
    }
}
