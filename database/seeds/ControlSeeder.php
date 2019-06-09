<?php

use Illuminate\Database\Seeder;
use App\Control;

class ControlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
  public function run()
    {

    	factory(Control::class, 90)->create();

    }
}
