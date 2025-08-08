<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberModel extends Model
{
    use HasFactory;
    protected $table = 'members';
    protected $fillable = [
        'id',
        'tag_id',
        'image',
        'sign',
        'refer_member_tag',
        'name',
        'father_name',
        'address',
        'phone',
        'caste',
        'sex',
        'study',
        'married_status',
        'rashan_card_number',
        'aadhhar_card_number',
        'bank_holder_name',
        'bank_account_number',
        'bank_ifsc_code',
        'bank_name',
        'aadhhar_link',
        'birth_link',
        'rashon_card_link',
        'voter_card_link',
        'dl_link',
        'pan_card_link',
        'school_link',
        'passport_link',
        'aadhar_yes_no',
        'birth_yes_no',
        'rashon_card_yes_no',
        'voter_card__yes_no',
        'dl_yes_no',
        'pan_card_yes_no',
        'school_yes_no',
        'passport_yes_no',
        'family_yes_no',
        'family_name',
        'family_member_number',
        'date',
        'email',
        'password',
        'created_at',
        'updated_at',
        'status',
        'dob',
        'business',
        'place',
    ];
}
