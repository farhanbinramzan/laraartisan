<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Heros extends Model
{
    use HasFactory;

    protected $fillable = [
        'sequence_listing',
        'icon',
        'link',
        'title'
    ];
}
