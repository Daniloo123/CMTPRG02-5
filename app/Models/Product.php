<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\User;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'category', 'description', 'user_id', 'status'];



    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function tag()
    {
        return $this->belongsToMany(Tag::class, 'products_tags');
    }
}


