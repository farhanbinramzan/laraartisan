<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    use HasFactory;

    protected $fillable =[
        'listing_sequence',
        'name',
        'desigination',
        'image',
        'social_accounts'=> 'array'
    ];
}
