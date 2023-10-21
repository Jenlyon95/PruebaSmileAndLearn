<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\Admin as Authenticatable;




class Admin extends Model
{
    use HasFactory,HasApiTokens;
    
    // Nombre de la tabla en la base de datos
    protected $table = 'admins';

    // Nombre de la columna que se utilizará como clave primaria
    protected $primaryKey = 'admin_id';
    
    // app/Models/User.php
public function dreamers()
{
    return $this->HasMany(Dreamer::class);
}
protected $hidden = [
    'password',
    
];

protected $fillable = [
    'email',
    'password'
    
];

}
