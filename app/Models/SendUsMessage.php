<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SendUsMessage extends Model
{
    use HasFactory;

    private $table='send_us_message';

    protected $fillable=[
        'name',
        'email', 
        'message'
    ];

}
