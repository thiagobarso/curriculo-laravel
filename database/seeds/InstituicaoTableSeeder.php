<?php

use Illuminate\Database\Seeder;

class InstituicaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instituicao')->insert([
        	[
        		'nome' => '4Linux',
        		'site' => 'https://www.4linux.com.br/'
        	],
        	[
        		'nome' => 'Eibneti',
        		'site' => 'http://eibneti.com.br/'
        	],
        	[
        		'nome' => 'Escola Técnica de Brasília',
        		'site' => 'http://www.etb.com.br/'
        	],
        	[
        		'nome' => '',
        		'site' => ''
        	]

        ]);
    }
}
