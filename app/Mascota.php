<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{

    protected $table='mascotas';
    protected $primaryKey='id_mascota';
    public $with=['especie','raza'];

    //Numeric PK or not
    public $incrementing=true;

    //activate or desactivate timestamps
    public $timestamps=true;
    public $fillable=[
    'id_mascota',
    'nombre',
    'genero',
    'peso',
    'id_propietario',
    'id_especie',
    'id_raza'

    ];

    public function especie()
    {
        return $this->belongsTo(Especie::class, 'id_especie','id_especie');
    }

    public function raza(){
        return $this->belongsTo(Raza::class, 'id_raza', 'id_raza');
    }
}
    