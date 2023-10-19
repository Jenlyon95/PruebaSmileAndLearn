<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    
    // app/Models/User.php
public function dreamers()
{
    return $this->hasMany(Dreamer::class);
}
protected $hidden = [
    'password',
    
];

protected $fillable = [
    'email',
    'password'
    
];
}
