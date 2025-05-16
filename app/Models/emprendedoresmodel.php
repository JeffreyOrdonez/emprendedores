<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class emprendedoresmodel extends Model
{
    protected $fillable=['nombre', 'telefono', 'servicio'];


    public function ferias()
{
    return $this->belongsToMany(Feria::class);
}

}
