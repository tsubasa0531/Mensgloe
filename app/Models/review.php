<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    protected $table = 'reviews';
    public function review()
    {
        return $this->hasMany(Review::class);
    }
    protected $fillable = ['user_id', 'title', 'body'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    
    }
    use HasFactory;
}
