<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client; //importuojame modeli

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * //uzpildo duomenu bazes lentele clients
     * @return void
     */
    public function run()
    {
        //factory() -> ClientFactory.php
        Client::factory()->count(500)->create();

    }
}
