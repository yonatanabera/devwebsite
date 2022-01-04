<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    private $table='blog_categories';

    protected $fillable=[
        'category_name'
    ];

    public function blogs(){
        return $this->hasMany(Blog::class, 'category_id');
    }

}
