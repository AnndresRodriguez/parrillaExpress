<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\belongsTo;

class compra_producto extends Model
{
    
    public function productos(){

        return $this->belongsTo(Producto::class);

    }

    public function compras(){

        return $this->belongsTo(compra::class);

    }

    

}
