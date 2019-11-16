<?php

use App\Models\Pages\Instrument;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class InstrumentsTableSeeder extends Seeder
{
	use DisableForeignKeys;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$this->disableForeignKeys();
   		Instrument::create([
		   'name' 			=> 'Yamaha',
		   'description' 	=> 'yamaha',
		   'created_at'     => Carbon::now(),
		   'updated_at'     => Carbon::now()
	   ]);
   		Instrument::create([
		   'name' => 'Roland',
		   'description' 	=> 'roland',
		   'created_at'     => Carbon::now(),
		   'updated_at'     => Carbon::now()
	   ]);
		Instrument::create([
			'name' 			=> 'Korg',
			'description' 	=> 'korg',
			'created_at'    => Carbon::now(),
			'updated_at'    => Carbon::now()
		]);
		Instrument::create([
			'name' 			=> 'Poland',
			'description' 	=> 'poland',
			'created_at'	=> Carbon::now(),
			'updated_at'    => Carbon::now()
		]);
		$this->enableForeignKeys();
    }
}
