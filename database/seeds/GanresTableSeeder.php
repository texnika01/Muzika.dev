<?php

use App\Models\Pages\Genres;
use Carbon\Carbon;
use Illuminate\Database\Seeder;


class GanresTableSeeder extends Seeder
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
		/**
		 * Add first genres
		 */
		Genres::create([
			'description' 	=> 'Pop Folk',
			'name' 			=> 'Pop',
			'user_id' 		=> 1,
			'created_at'  	=> Carbon::now(),
			'updated_at'  	=> Carbon::now()
		]);
		Genres::create([
			'name' 			=> 'Rok',
			'description' 	=> 'Rok end Rol',
			'user_id' 		=> 1,
			'created_at' 	=> Carbon::now(),
			'updated_at' 	=> Carbon::now()
		]);
		Genres::create([
			'name' 			=> 'Dens',
			'description' 	=> 'Dens',
			'user_id' 		=> 1,
			'created_at'    => Carbon::now(),
			'updated_at'    => Carbon::now()
		]);

		$this->enableForeignKeys();
    }
}
