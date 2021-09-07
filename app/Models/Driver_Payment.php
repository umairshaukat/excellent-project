<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver_Payment extends Model
{
    use HasFactory;
    protected $table = 'driver__payments';
    private static $attributesQueue = [];
    protected $fillable = [];
}
