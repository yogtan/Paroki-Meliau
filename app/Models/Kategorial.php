<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategorial extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function member(){
        return $this->belongsTo(Member::class);
    }
}
