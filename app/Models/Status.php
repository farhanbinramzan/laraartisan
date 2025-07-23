<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'description',
        'no_of_client',
        'client_title',
        'client_desc',
        'no_of_project',
        'project_title',
        'project_desc',
        'no_of_hours',
        'hours_title',
        'hours_desc',
        'no_of_workers',
        'worker_title',
        'worker_desc'
    ];
}
