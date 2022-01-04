<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    private $table='contact_us';


    protected $fillable=[
        'location',
        'phone_number',
        'email'
    ];

}
