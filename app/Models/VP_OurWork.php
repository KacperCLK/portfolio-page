<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VP_OurWork extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'displaying',
        'description',
        'bg_color',
    ];
}
