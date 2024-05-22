<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tours;

class Gallery extends Model
{
    use HasFactory;
    protected $table = 'gallery';
    protected $guarded = [];

    
    public function tours(){
        return $this->belongsTo(Tours::class, 'tour_id', 'id');
    }

}
