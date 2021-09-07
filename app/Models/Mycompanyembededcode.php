<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mycompanyembededcode extends Model
{
    use HasFactory;
    protected $table = 'mycompanyembededcodes';
    private static $attributesQueue = [];
    protected $fillable = [];
}
