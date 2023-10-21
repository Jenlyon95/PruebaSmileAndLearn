<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\Dreamer as Authenticatable;

class Dreamer extends Model
{
    use HasFactory, HasApiTokens;

        // Nombre de la tabla en la base de datos
        protected $table = 'dreamers';

        // Nombre de la columna que se utilizará como clave primaria
        protected $primaryKey = 'dreamer_id';

    protected $fillable = [
        'nombres',
        'apellidos',
        'fecha_de_nacimiento'
    ];
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
    public function groups()
{
    return $this->belongsToMany(Group::class, 'grupos_asignados');
}
}
