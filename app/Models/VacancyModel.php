<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VacancyModel extends Model
{
    use HasFactory;

    protected $table = 'vacancy';

    protected $fillable = [
        'id',
        'advertisement_id',
        'vacancy_number',
        'post_date',
        'last_date',
        'category',
        'post',
        'application_fee_gen',
        'application_fee_oth',
        'file',
        'qualifications',
        'status',
        'description',
        'location',
        'salary_range',
        'total_post',
        'created_at',
        'updated_at',
    ];

    public function advertisement()
    {
        return $this->belongsTo(AdvertisementModel::class, 'advertisement_id');
    }
}
