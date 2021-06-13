<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    protected $table      = "cuenta";
    protected $dates = [ 'created_at','updated_at' ];
    public $timestamps = true;

    protected $fillable =
        [
            "numero_cuenta",
            "saldo_cuenta",
            "id_users",
        ];
    protected $primaryKey = 'id_cuenta'; // Not null\\\\

    public function rel_cuenta_user() {
        return $this->belongsTo('App\User',  'id_users','id_users');
    }

    public function rel_cuenta_des() {
        return $this->hasMany('App\Cuenta_descripcion',  'id_cuenta','id_cuenta');
    }
}
