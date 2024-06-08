<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sliders extends Model
{
    use HasFactory;
    protected $fillable = ['name','title', 'image','home_page_id'];

    protected $hidden = [
        'status'
    ];
}
