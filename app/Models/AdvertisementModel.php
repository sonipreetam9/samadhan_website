<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvertisementModel extends Model
{
    use HasFactory;
    protected $table = 'advertisement';

    protected $fillable = [
        'id',
        'advt_number'
    ];


    public function vacancies()
    {
        return $this->hasMany(VacancyModel::class, 'advertisement_id');
    }
}
