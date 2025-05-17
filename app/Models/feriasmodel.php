<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class feriasmodel extends Model
{
    protected $table = 'ferias';
    protected $fillable = ['nombre', 'fecha', 'lugar', 'descripcion'];

 
 
public function emprendedores()
{
    return $this->belongsToMany(Emprendedor::class);
}
}
