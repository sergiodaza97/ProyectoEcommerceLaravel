<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    use HasFactory;

    public function products (){
        return $this->belongsToMany(Product::class,'products_has_categories');
     }
     public function scopeNombres($query, $name) {
    	if ($name) {
    		return $query->where('name','like',"%$name%");
    	}
    } 
}
