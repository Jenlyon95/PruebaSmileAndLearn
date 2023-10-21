<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\Group as Authenticatable;

class Group extends Model
{
    use HasFactory, HasApiTokens;

            // Nombre de la tabla en la base de datos
            protected $table = 'groups';

            // Nombre de la columna que se utilizará como clave primaria
            protected $primaryKey = 'group_id';

    protected $fillable = [
        'asignatura',
        
    ];
    
public function dreamers()
{
    return $this->belongsToMany(Dreamer::class,'dreamers_asignados');
}
public function admins()
{
    return $this->belongsTo(Admin::class);
}

}
