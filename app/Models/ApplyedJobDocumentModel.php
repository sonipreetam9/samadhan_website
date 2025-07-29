<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyedJobDocumentModel extends Model
{
    use HasFactory;

    protected $table = 'applyed_job_documents';

    protected $fillable = [
        'id',
        'apply_job_id',
        'education_name',
        'year',
        'marks',
        'total',
        'percent',
        'division',
        'board',
        'subjects',
        'file_link',
    ];
}
