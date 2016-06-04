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

            \DB::table('tipo_articulos')->insert(array(

                'tipo' => 'Remera',
                'persona_dirigida'=> 'Hombres',
                'marca' => 'taverniti',
                'talle' => 'xl',
                'precio' => 134,

                'tela' => 'Algodon',
                'estampa' => 'Lisa',
                'friza' => 'No',
                'capucha' => 'No'

                ));


    		\DB::table('articulos')->insert(array(

    			'codigo' => '1234512',
    			

    			));

            $tipo_articulo = Articulo::where('')
            
        \DB::table('articulos')->insert(array(

                'codigo' => '1234512',
                

                ));

            \DB::table('tipo_articulos')->insert(array(

                'tipo' => 'Remera',
                'persona_dirigida'=> 'Hombres',
                'marca' => 'taverniti',
                'talle' => 'xl',
                'precio' => 134,

                'tela' => 'Algodon',
                'estampa' => 'Lisa',
                'friza' => 'No',
                'capucha' => 'No'

                ));

\DB::table('articulos')->insert(array(

                'codigo' => '12ffff512',
                

                ));

            \DB::table('tipo_articulos')->insert(array(

                'tipo' => 'Remera',
                'persona_dirigida'=> 'Hombres',
                'marca' => 'narrow',
                'talle' => 'xl',
                'precio' => 245,

                'tela' => 'Algodon',
                'estampa' => 'Lisa',
                'friza' => 'No',
                'capucha' => 'No'

                ));

            \DB::table('articulos')->insert(array(

                'codigo' => '1234512',
                

                ));

            \DB::table('tipo_articulos')->insert(array(

                'tipo' => 'Short',
                'persona_dirigida'=> 'Hombres',
                'marca' => 'taverniti',
                'talle' => 'xl',
                'precio' => 145,

                'tela' => 'Algodon',
                'estampa' => 'Lisa',
                'friza' => 'No',
                'capucha' => 'No'

                ));



\DB::table('articulos')->insert(array(

                'codigo' => '6565656565',
                

                ));

            \DB::table('tipo_articulos')->insert(array(

                'tipo' => 'Remera manga larga',
                'persona_dirigida'=> 'Mujeres',
                'marca' => 'Dolce gabbana',
                'talle' => 'xl',
                'precio' => 1200,

                'tela' => 'Algodon',
                'estampa' => 'Rayada',
                'friza' => 'No',
                'capucha' => 'No'

                ));



}
}
