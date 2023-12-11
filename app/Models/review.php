<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    protected $table = 'reviews';
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    protected $fillable = ['rating', 'comment', 'product_id'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    
    }
    use HasFactory;
}
