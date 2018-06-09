<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\belongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class compra extends Model
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
         'id_compra', 
         'descripcion',
         'fecha_compra',
         'id_cliente'
    ];

    public function setDescripcion($valor)
    {
        $this->attributes['descripcion'] = strtolower($valor);
    }

    public function setFecha($valor)
    {
        $this->attributes['fecha'] = strtolower($valor);
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
        return $this->belongsTo(cliente::class);
    }

    public function compra_productos(){
        return $this->hasMany(compra_producto::class);
    }
}
