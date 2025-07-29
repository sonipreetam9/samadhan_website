<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyedJobModel extends Model
{
    use HasFactory;

    protected $table = 'applyed_job';

    protected $fillable = [
        'id',
        'user_id',
        'vacancy_id',
        'advertisement_no',
        'category_no',
        'post_name',
        'candidate_name',
        'father_name',
        'dob_day',
        'dob_month',
        'dob_year',
        'sex',
        'category',
        'domicile',
        'nationality',
        'address',
        'pincode',
        'other_qualification',
        'exp_years',
        'exp_months',
        'exp_days',
        'visible_mark',
        'declaration',
        'place',
        'form_date',
        'domicial_yes_no',
        'phc_type',
        'aadhar_card',
        'pan_card',
        'caste',
        'passport_image',
        'domicial',
        'eligibility_1',
        'eligibility_2',
        'sign',
    ];
}
