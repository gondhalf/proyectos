<?php
/**
 * Created by PhpStorm.
 * User: Asier1
 * Date: 08/10/2017
 * Time: 20:19
 */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Fabricante;
use App\Vehiculo;
use Faker\Factory as Faker;

class VehiculoSeeder extends Seeder
{
    public function run()
    {
        $faker=Faker::create();

        $cantidad=Fabricante::all()->count();

        for($i=0; $i < $cantidad; $i++)
        {
            Vehiculo::create
            ([
                'color'=>$faker->safeColorName(),
                'cilindraje'=>$faker->randomFloat(2),
                'potencia'=>$faker->randomNumber(),
                'peso'=>$faker->randomFloat(2),
                'fabricante_id'=>$faker->numberBetween(1,$cantidad)
            ]);
        }
    }
}