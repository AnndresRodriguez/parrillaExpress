<?php

namespace App;
use Illuminate\Database\Eloquent\Concerns\belongsTo;
use Illuminate\Database\Eloquent\Concerns\hasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use Notifiable, SoftDeletes;

    const USUARIO_VERIFICADO = '1';
    const USUARIO_NO_VERIFICADO = '0';

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
         'nombre_producto', 
         'descripcion',
        
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
    
    public function compra_productos(){
        return $this->hasMany(compra_producto::class);
    }
}
