<?php

use Illuminate\Database\Seeder;
use App\Entrega;

class EntregaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(Entrega::class, 90)->create();

    }
}
