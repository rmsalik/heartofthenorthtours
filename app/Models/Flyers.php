<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flyers extends Model 
{
    use HasFactory;
    protected $table = 'flyers';
    protected $guarded = [];
    
}
