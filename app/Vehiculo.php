<?php
/**
 * Created by PhpStorm.
 * User: Asier1
 * Date: 08/10/2017
 * Time: 18:02
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table="vehiculos";
    protected  $fillable = ['color','cilindraje','potencia','peso','fabricante_id'];
    //protected $fillable=array('color','cilindraje','potencia','peso');

    public function fabricante(){
        //belongsTo() un vehiculo pertenece a un fabricante
        $this->belongsTo('Fabricante');
    }
}