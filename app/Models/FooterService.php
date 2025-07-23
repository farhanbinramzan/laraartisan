<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FooterService extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_name',
        'service_links',
    ];
}
