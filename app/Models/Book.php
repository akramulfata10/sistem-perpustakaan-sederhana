<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model {
    use HasFactory;

    protected $fillable = ['user_id', 'category_id', 'title', 'status'];

    public function category() {
        return $this->belongsTo(Category::class);
        //satu postingan punya satu category
    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
        //satu postingan hanya boleh memiliki satu user
    }
    public function rentlogss() {
        return $this->hasOne(Rentlog::class);
    }

}