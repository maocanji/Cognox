<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table      = "cliente";
    protected $dates = [ 'created_at','updated_at' ];
    public $timestamps = true;

    protected $fillable =
        [
            "identificador_cliente",
            "nombre_cliente",
            "cuenta",
            "id_users",
        ];
    protected $primaryKey = 'id_cliente'; // Not null\\\\

    public function rel_cliente_users() {
        return $this->belongsTo('App\Users',  'id_users','id_users');
    }
}
