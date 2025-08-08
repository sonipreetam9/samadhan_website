<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberFamilyModel extends Model
{
    use HasFactory;

    protected $table = "members_family_details";
    protected $fillable = [
        'id',
        'member_id',
        'name',
        'realtion',
        'age',
        'aadhhar_card_number',
        'study_level',
        'school_name',
        'file_link',
        'created_at',
        'updated_at',
    ];
}
