<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){


        \CodeProject\Entities\Project::truncate();//apaga os registros

        factory(\CodeProject\Entities\Project::class, 10)->create();

    }
}
