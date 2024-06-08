<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerReviews extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'home_page_id',
        'image'
    ];

    protected $hidden = [
        'status'
    ];

}
