<?php

use Illuminate\Database\Seeder;

class EmpresaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresa')->insert([
        	[
        		'nome' => 'GEAP - Fundação de Seguridade Social',
        		'site' => 'https://www.geap.com.br/'
        	],
        	[
        		'nome' => 'Datainfo',
        		'site' => 'http://www.datainfo.inf.br/'
        	],
        	[
        		'nome' => 'Polisys Informática',
        		'site' => 'http://www.polisys.com.br/'
        	],
        	[
        		'nome' => 'Linkdata S/A',
        		'site' => 'http://www.linkdata.com.br/'
        	],
        	[
        		'nome' => 'Universidade de Brasília',
        		'site' => 'http://www.unb.br/'
        	],
        	[
        		'nome' => 'CMT Engenharia LTDA',
        		'site' => 'http://www.cmtengenharia.com.br/'
        	],
        	[
        		'nome' => 'CTIS',
        		'site' => 'https://www.ctis.com.br/'
        	],
        	[
        		'nome' => 'Maranello Centro Automotivo',
        		'site' => 'http://www.mmaranello.com.br/empresa.html'
        	],
        	[
        		'nome' => 'Mirante Informatica LTDA ME',
        		'site' => 'http://www.mirante.net.br/'
        	],
        	[
        		'nome' => 'Exercito Brasileiro',
        		'site' => 'http://www.eb.mil.br/'
        	]
    ]);
    }
}
