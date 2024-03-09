<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery_Category extends Model
{
    use HasFactory;

    protected $table = 'gallery_categories';

    protected $fillable = [
        'name',
        'image',
        'description'
    ];

     public function fotos()
     {
         return $this->hasMany(Galery::class, 'gallery_category_id');
     }

     
}
