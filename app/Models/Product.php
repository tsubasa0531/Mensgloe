<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RankingController;



class product extends Model
{   
    public function getPaginateByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    public function review()
    {
        return $this->hasMany('App\Models\review');
    }
    public function image()
    {
        return $this->hasone('App\Models\image');
    }
   
protected $fillable = ['name','body','price',];
    use HasFactory;
}
