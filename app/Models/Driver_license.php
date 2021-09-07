<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver_license extends Model
{
    use HasFactory;
    protected $table = 'driver_licenses';
    private static $attributesQueue = [];
    protected $fillable = [];
}
