<?php

use Illuminate\Database\Seeder;
use App\Articulo;
use App\TipoArticulo;

class ArticulosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            \DB::table('articulos')->insert(array(

                'codigo' => '123456',
                'tipo_articulo' => 'Bermuda',
                'categoria'=> 'Hombre',
                'marca' => 'Taverniti',
                'talle' => 'xl',
                'color' => 'Verde',

                'precio' => 125.2,
                'tela' => 'Algodon',
                'motivo' => 'Lisa',
                'friza' => 'No',
                'capucha' => 'No'

                ));

             \DB::table('articulos')->insert(array(

                'codigo' => '123ffff6',
                'tipo_articulo' => 'Bermuda',
                'categoria'=> 'Hombre',
                'marca' => 'Narrow',
                'talle' => 'xl',
                'color' => 'Verde',

                'precio' => 225.2,
                'tela' => 'Algodon',
                'motivo' => 'Lisa',
                'friza' => 'No',
                'capucha' => 'No'

                ));



}
}
