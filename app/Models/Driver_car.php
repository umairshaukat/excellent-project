<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver_car extends Model
{
    use HasFactory;
    protected $table = 'driver_cars';
    private static $attributesQueue = [];
    protected $fillable = [];
}
