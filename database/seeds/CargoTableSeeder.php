<?php

use Illuminate\Database\Seeder;

class CargoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('cargo')->insert([
        	[
        		'nome' => 'Técnico em Informática',
        	 	'empresa_id' => DB::table('empresa')->select('id')->where('nome','Maranello Centro Automotivo')->value('id')
        	],
        	[
        		'nome' => 'Operador de Teleprocessamento',
                'empresa_id' => DB::table('empresa')->select('id')->where('nome','CTIS')->value('id')        	 	
        	],
        	[
        		'nome' => 'Operador de Sistemas',
                'empresa_id' => DB::table('empresa')->select('id')->where('nome','GEAP - Fundação de Seguridade Social')->value('id')
        	],
        	[
        		'nome' => 'Operador de Sistemas',
                'empresa_id' => DB::table('empresa')->select('id')->where('nome','CMT Engenharia LTDA')->value('id')        	 	
        	],
        	[
        		'nome' => 'Desenvolvedor',
                'empresa_id' => DB::table('empresa')->select('id')->where('nome','Datainfo')->value('id')
        	],
        	[
        		'nome' => 'Pesquisador/Desenvolvedor',
                'empresa_id' => DB::table('empresa')->select('id')->where('nome','Universidade de Brasília')->value('id')
        	],
        	[
        		'nome' => 'Analista de Sistemas Java',
                'empresa_id' => DB::table('empresa')->select('id')->where('nome','Mirante Informatica LTDA ME')->value('id')
        	],
        	[
        		'nome' => 'Analista de Desenvolvimento Pleno',
                'empresa_id' => DB::table('empresa')->select('id')->where('nome','Linkdata S/A')->value('id')
        	],
        	[
        		'nome' => 'Analista de Sistemas Pleno',
                'empresa_id' => DB::table('empresa')->select('id')->where('nome','Polisys Informática')->value('id')        	 	
        	],
        	[
        		'nome' => 'Desenvolvedor Java',
                'empresa_id' => DB::table('empresa')->select('id')->where('nome','Exercito Brasileiro')->value('id')        	 	
        	]

        ]);
    }
}
