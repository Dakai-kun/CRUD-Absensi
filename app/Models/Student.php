<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $fillable = ['nis', 'name', 'rombel', 'rayon', 'ket'];

    // public function user()
    // {
    //     return $this->belongsTo('App\Models\Student');
    // }
}
