<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientroute extends Model
{
    use HasFactory;
    protected $table = 'clientroutes';
    private static $attributesQueue = [];
    protected $fillable = [];
}
