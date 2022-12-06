<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


//return new class extends Factory
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        // for(iki 500) ir turime rezultata
        // Faker biblioteka - generuoja atsitiktinius duomenis PAGAL tematika


        //cia surasyti visus stulpelius, kuriuos PATYS sukureme lenteleje
        return [
            'name' => $this->faker->firstName(), // sugeneruos netikra varda
            'surname' => $this->faker->lastName(), // sugeneruos netikra pavarde
            'personal_code' => $this->faker->numberBetween(10000, 99999),
            'address' => $this->faker->address()
        ];
    }
}
