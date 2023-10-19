<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'dreamers',
        
    ];
    
public function dreamers()
{
    return $this->belongsToMany(Dreamer::class);
}

}
