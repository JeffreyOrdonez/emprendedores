<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use AppXml\Models\emprendedoresmodel;
class feriasmodel extends Model
{
    protected $table = 'ferias';
    protected $fillable = ['nombre', 'fecha', 'lugar', 'descripcion'];

 
 
public function emprendedores()
{
    return $this->belongsToMany(\App\Models\emprendedoresmodel::class, 'emprendedores_ferias', 'ferias_id', 'emprendedores_id');
}
}
