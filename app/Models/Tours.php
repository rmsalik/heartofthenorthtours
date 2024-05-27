<?php

namespace App\Models;

use App\Models\Gallery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tours extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($tour) {
            // Delete related gallery records
            $tour->gallery()->delete();
        });
    }

    public function gallery()
    {
        return $this->hasMany(Gallery::class, 'tour_id', 'id');
    }

}
