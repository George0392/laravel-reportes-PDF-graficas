<?php

use Illuminate\Database\Seeder;
use App\Medico;

class MedicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Medico::class, 90)->create();
    }
}
