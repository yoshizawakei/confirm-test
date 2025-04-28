<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $genders = ['男性', '女性', 'その他'];
        return [
            'category_id' => $this->faker->numberBetween(1, 5),
            'name_first' => $this->faker->firstName,
            'name_last' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'tel' => $this->faker->numerify("090########"),
            'address' => $this->faker->address,
            'building' => $this->faker->secondaryAddress,
            'gender' => $this->faker->randomElement($genders),
            'detail' => $this->faker->text(120),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
