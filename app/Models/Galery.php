<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    use HasFactory;

    protected $fillable = [
        'gallery_category_id',
        'image',
    ];

     public function album()
     {

         return $this->belongsTo(Gallery_Category::class);
     }
}
