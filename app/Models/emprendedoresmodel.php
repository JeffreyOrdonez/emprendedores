<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\feriasmodel;
class emprendedoresmodel extends Model
{
    protected $table = 'emprendedores';
    protected $fillable=['nombre', 'telefono', 'servicio'];


    public function ferias()
{
    return $this->belongsToMany(\App\Models\feriasmodel::class, 'emprendedores_ferias', 'emprendedores_id', 'ferias_id');
}

}
