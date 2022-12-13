<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/*
<?php

use App\Customer;
use App\CustomerAddress;
use App\CustomerPurchase;
use Faker\Generator as Faker;

$factory->define(User_information::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstname(),
        'first_name' => $faker->firstname(),
        'last_name' => $faker->lastname(),
        'contact' => $faker->phoneNumber(),
        'date_of_birth' => $faker->date(),
        'gender' => $faker->randomElement(['Male', 'Female', 'Other']),
        'maritial_status' => $faker->randomElement(['Married', 'Unmarried', 'Divorced']),
        'adhaar_card_number' => $faker->randomNumber(9, true),
        'pan_card_number' => $faker->randomNumber(9, true),
        'image' => $faker->imageUrl(640, 480, 'animals', true),
    ];
});

$factory->define(CustomerAddress::class, function (Faker $faker) {
    return [
        'address' => $faker->streetAddress,
        'city' => $faker->city,
        'state' => $faker->stateAbbr,
        'zip' => $faker->postcode,
    ];
});

$factory->define(CustomerPurchase::class, function (Faker $faker) {
    return [
        'method' => $faker->randomElement([
            CustomerPurchase::METHOD_CREDIT_CARD,
            CustomerPurchase::METHOD_PAYPAL,
        ]),
        'amount' => $faker->randomFloat(2, 10, 200),
    ];
});
 */

class User_informationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => '1',
            'first_name' => fake()->firstName(),
            'middle_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'contact' => '1234567890',
            'date_of_birth' => fake()->date(),
            'gender' => fake()->randomElement(['Male', 'Female', 'Other']),
            'maritial_status' => fake()->randomElement(['Married', 'Unmarried', 'Divorced']),
            'adhaar_card_number' => '123456789',
            'pan_card_number' => '123456789',
            'login_id' => '2',
            'login_type' => 'lasdhf',
        ];
    }
}
