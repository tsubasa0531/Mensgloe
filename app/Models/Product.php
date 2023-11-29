<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RankingController;



class product extends Model
{   
    public function review()
    {
        return $this->hasOne('App\Models\review');
    }
    public function image()
    {
        return $this->hasone('App\Models\image');
    }
   
protected $fillable = ['name','description','price',];
    use HasFactory;
}
