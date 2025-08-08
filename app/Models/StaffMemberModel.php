<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffMemberModel extends Model
{
    use HasFactory;

    protected $table = "staff_members";

    protected $fillable = [
        'name',
        'tag_id',
        'image',
        'show_website',
        'post',
        'status',
    ];
}
