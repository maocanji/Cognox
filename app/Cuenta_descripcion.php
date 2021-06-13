<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuenta_descripcion extends Model
{
    protected $table      = "cuenta_descripcion";
    protected $dates = [ 'created_at','updated_at' ];
    public $timestamps = true;

    protected $fillable =
        [
            "id_cuenta_descripcion",
            "retiro",
            "deposito",
            "id_cuenta",
        ];
    protected $primaryKey = 'id_cuenta_descripcion'; // Not null\\\\

//$table->enum('gender', ['male', 'female']);
//    public function rel_etapa_actividad() {
//        return $this->hasMany('App\actividad_etapas_legalizacion',  'etapas_legalizacion_id','etapas_legalizacion_id');
//    }
//
//    public function rel_etapa_historico() {
//        return $this->belongsTo('App\historico_legalizacion',  'etapas_legalizacion_id','estapas_legalizacion_id');
//    }
}
