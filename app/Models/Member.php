<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'jabatan',
        'image',
    ];

    public function kategorial()
    {
        return $this->hasMany(Kategorial::class);
    }
}
