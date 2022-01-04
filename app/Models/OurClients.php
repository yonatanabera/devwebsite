<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurClients extends Model
{
    use HasFactory;

    private $table='our_clients';


    protected $fillable=[
        'company_name',
        'company_logo'
    ];

}
