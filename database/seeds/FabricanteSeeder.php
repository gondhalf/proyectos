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
use Faker\Factory as Faker;

class FabricanteSeeder extends Seeder
{
    public function run()
    {
        $faker=Faker::create();
        for ($i=0; $i <3; $i++)
        {
            Fabricante::create
            ([
                'nombre'=>$faker->word(),
                'telefono'=>$faker->randomNumber(7)

            ]);
        }

    }
}