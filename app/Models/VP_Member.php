<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VP_Member extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'member_name',
        'member_image_url',
        'vector_image_url',
        'member_git_link',
        'displaying',
        'member_color',
    ];
}
