<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mycompany extends Model
{
    use HasFactory;
    protected $table = 'mycompanies';
    private static $attributesQueue = [];
    protected $fillable = [];
}
