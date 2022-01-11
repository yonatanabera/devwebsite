<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table='blog';

    protected $fillable=[
        'title',
        'user_id',
        'category_id',
        'blog_photo',
        'small_description',
        'blog_content'
    ];

    public function category(){
        return $this->belongsTo(BlogCategory::class, 'category_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
