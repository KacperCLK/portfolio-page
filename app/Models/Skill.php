<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'color',
        'progres',
        'section',
    ];

    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            if ($model->progres < 1 || $model->progres > 100) {
                throw new \InvalidArgumentException('Progres must be between 1 and 100.');
            }
        });
    }
}
