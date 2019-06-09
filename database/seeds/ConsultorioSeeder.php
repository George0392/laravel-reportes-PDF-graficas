<?php

use Illuminate\Database\Seeder;
use App\Consultorio;
class ConsultorioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	factory(Consultorio::class, 90)->create();

    }
}
