<?php

use Illuminate\Database\Seeder;
use App\Empresa;
use Carbon\Carbon;

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
        	[
        		'pessoa_id' => 1,
        		'cargo_id' => Empresa::where('nome', 'Maranello Centro Automotivo')->first()->cargos()->first()->id,
        		'datainicio' => Carbon::create(2008, 7, 01, 0),
        		'datainicio' => Carbon::create(2009, 1, 31, 0)
			],
			[
        		'pessoa_id' => 1,
        		'cargo_id' => Empresa::where('nome', 'CTIS')->first()->cargos()->first()->id,
        		'datainicio' => Carbon::create(2012, 4, 17, 0),
        		'datainicio' => Carbon::create(2012, 5, 9, 0)
        	],
			[
        		'pessoa_id' => 1,
        		'cargo_id' => Empresa::where('nome', 'GEAP - Fundação de Seguridade Social')->first()->cargos()->first()->id,
        		'datainicio' => Carbon::create(2012, 5, 15, 0),
        		'datainicio' => Carbon::create(2013, 7, 26, 0)
			],
			[
        		'pessoa_id' => 1,
        		'cargo_id' => Empresa::where('nome', 'CMT Engenharia LTDA')->first()->cargos()->first()->id,
        		'datainicio' => Carbon::create(2013, 7, 26, 0),
        		'datainicio' => Carbon::create(2014, 2, 10, 0)
			],
			[
        		'pessoa_id' => 1,
        		'cargo_id' => Empresa::where('nome', 'Datainfo')->first()->cargos()->first()->id,
        		'datainicio' => Carbon::create(2014, 3, 19, 0),
        		'datainicio' => Carbon::create(2014, 6, 13, 0)
			],
			[
        		'pessoa_id' => 1,
        		'cargo_id' => Empresa::where('nome', 'Universidade de Brasília')->first()->cargos()->first()->id,
        		'datainicio' => Carbon::create(2014, 6, 15, 0),
        		'datainicio' => Carbon::create(2016, 4, 30, 0)
			],
			[
        		'pessoa_id' => 1,
        		'cargo_id' => Empresa::where('nome', 'Mirante Informatica LTDA ME')->first()->cargos()->first()->id,
        		'datainicio' => Carbon::create(2015, 12, 7, 0),
        		'datainicio' => Carbon::create(2016, 1, 7, 0)
			],
			[
        		'pessoa_id' => 1,
        		'cargo_id' => Empresa::where('nome', 'Linkdata S/A')->first()->cargos()->first()->id,
        		'datainicio' => Carbon::create(2016, 5, 16, 0),
        		'datainicio' => Carbon::create(2016, 7, 20, 0)
			],
			[
        		'pessoa_id' => 1,
        		'cargo_id' => Empresa::where('nome', 'Polisys Informática')->first()->cargos()->first()->id,
        		'datainicio' => Carbon::create(2016, 9, 19, 0),
        		'datainicio' => Carbon::create(2017, 7, 28, 0)
			],
			[
        		'pessoa_id' => 1,
        		'cargo_id' => Empresa::where('nome', 'Exercito Brasileiro')->first()->cargos()->first()->id,
        		'datainicio' => Carbon::create(2017, 3, 1, 0),
        		'datainicio' => null
			],
        ]);
    }
}
