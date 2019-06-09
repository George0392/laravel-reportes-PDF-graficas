<?php

use Illuminate\Database\Seeder;
use App\Medicamento;

class MedicamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Medicamento::class, 90)->create();
    }
}
