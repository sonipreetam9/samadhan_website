<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberNominessModel extends Model
{
    use HasFactory;


    protected $table="member_nominees";
     protected $fillable = [
        'id',
        'member_id',
        'name',
        'nominee_relation',
        'nominee_age',
        'nominee_amount',
        'file_link',
        'created_at',
        'updated_at',
    ];
}
