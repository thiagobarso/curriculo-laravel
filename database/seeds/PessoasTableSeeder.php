<?php

use Illuminate\Database\Seeder;

class PessoasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pessoas')->insert(
        	[
        		'cpf' => '027.896.791-42',
        		'nome' => 'Thiago Barbosa Soares' 
        	]
        );
    }
}
