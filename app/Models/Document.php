<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'categories_id',
        'title',
        'file',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }


}