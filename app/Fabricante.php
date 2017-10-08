<?php
/**
 * Created by PhpStorm.
 * User: Asier1
 * Date: 08/10/2017
 * Time: 18:04
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Fabricante extends Model
{
    protected $table="Fabricantes";
    protected  $fillable=['nombre','telefono'];
    //protected  $fillable=array('nombre','telefono');

    public function vehiculos(){
        //la funcion hasMany es una basica de Model "tiene muchos vehiculos"
        $this->hasMany('Vehiculo');
    }
}