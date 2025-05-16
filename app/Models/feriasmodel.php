<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class feriasmodel extends Model
{
    protected $fillable = ['nombre', 'fecha', 'hora', 'lugar', 'descripcion'];

 
 
public function emprendedores()
{
    return $this->belongsToMany(Emprendedor::class);
}
}
