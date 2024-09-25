<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PersonalInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>  $this->faker->name, 
            'nid' =>  $this->faker->numberBetween(10000000000,1000000000000),
            'father_name' => $this->faker->name, 
            'father_nid' => $this->faker->numberBetween(10000000000,1000000000000),
            'father_mobile' => $this->faker->numberBetween(10000000000,99999999999), 
            'mother_name' => $this->faker->firstNameMale(), 
            'mother_nid' => $this->faker->numberBetween(10000000000,1000000000000), 
            'mother_mobile' => $this->faker->numberBetween(10000000000,99999999999),  
            'guardian_name' => $this->faker->name, 
            'guardian_nid' => $this->faker->numberBetween(10000000000,1000000000000), 
            'guardian_mobile' => $this->faker->numberBetween(10000000000,99999999999),  
            'present_address' => $this->faker->address, 
            'permanent_address' => $this->faker->address, 
            'email' => $this->faker->email(), 
            'education' =>  $this->faker->sentence(2), 
            'gender' => $this->faker->randomElement(['male', 'female']), 
            'religion' => $this->faker->randomElement(['islam', 'hindu','other']),  
            'mobile' => $this->faker->numberBetween(11,12), 
            'yourself' => $this->faker->sentence(4), 
            'why_interest_to_join' =>$this->faker->sentence(10), 
        ];
    }
}
