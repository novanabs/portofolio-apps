<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\candidate;
class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		$this->call('candidateTableSeeder');
	}

	class candidateTableSeeder extends Seeder
	{
		public function run()
		{
			candidate::create('NIM'=>209)
		}
	}
}
/*

DB::insert('insert into candidates(NIM,name,birthplace,birthday,faculty,department,malang_address,origin_address)
			values (:NIM,:name,:birthplace,:birthday,:faculty,:department,:malang_address,:origin_address)', 
			[
				'NIM' => '201110370311056',
				'name'=> "Novan Alkaf Bahraini Saputra",
				'birthplace' =>"Balikpapan",
				'birthday'  =>'1993-11-10',
				'faculty' => "Teknik",
				'department' => "Informatika",
				'malang_address' => "Jln Sengkalin no. 164",
				'origin_address' => "Kayutangi Banjarmasin"
			]);

		DB::insert('insert into candidates(NIM,name,birthplace,birthday,faculty,department,malang_address,origin_address)
			values (:NIM,:name,:birthplace,:birthday,:faculty,:department,:malang_address,:origin_address)', 
			[
				'NIM' => '201110370311036',
				'name'=> 'Yulida Khairunnisa',
				'birthplace' =>'Kandangan',
				'birthday'  =>'1993-2-19',
				'faculty' => 'Teknik',
				'department' => 'Informatika',
				'malang_address' => 'Sigura Hills',
				'origin_address' => 'Alalak  Banjarmasin'
			]);	

*/