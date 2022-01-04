<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurCharacters extends Model
{
    use HasFactory;

    private $table='our_characters';


    protected $fillable=[
        'title',
        'icon',
        'description'
    ];

}
