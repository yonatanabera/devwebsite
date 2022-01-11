<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $table='portfolio';


    protected $fillable=[
        'image',
        'profile_title',
        'category',
        'description'
    ];

}
