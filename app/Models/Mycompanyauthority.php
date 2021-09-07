<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mycompanyauthority extends Model
{
    use HasFactory;
    protected $table = 'mycompanyauthorities';
    private static $attributesQueue = [];
    protected $fillable = [];
}
