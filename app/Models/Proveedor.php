<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    public function ordenesCompra()
    {
        return $this->hasMany(OrdenCompra::class);
    }
}
