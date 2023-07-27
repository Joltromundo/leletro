<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appliance extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = [
        'name',
        'description',
        'category',
        'brand',
        'color',
        'voltage',
        'weight',
        'height',
        'width',
        'depth'
    ];
}
