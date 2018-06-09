<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clienteparrilla extends Model
{
     use Notifiable, SoftDeletes;

    // protected $table = 'users'; 
    // protected $dates = ['deleted_at'];
    //protected $primaryKey = 'usuario'; // or null

    // public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
         'id', 
         'nombre',
         'apellido',
         'edad',
         'sexo',
         'cedula',
         'fecha_nacimiento'
        
    ];

    public function setNombreProducto($valor)
    {
        $this->attributes['nombreProducto'] = strtolower($valor);
    }

    public function setDescripcion($valor)
    {
        $this->attributes['descripcion'] = strtolower($valor);
    }

    public function getNombreProducto($valor)
    {
        return ucwords($valor);
    }
   
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function compras(){
        return $this->hasMany(compra::class);
    }

}
