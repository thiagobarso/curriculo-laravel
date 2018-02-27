<?php

use Illuminate\Database\Seeder;

use App\Cargo;

class PessoaHasCargoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pessoa_has_cargo')->insert([
        	'pessoa_id' => 1,
        	'cargo_id' => Cargo::empresa()->where('nome', '');
        ]);
    }
}
