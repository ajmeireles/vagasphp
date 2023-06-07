<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/** @extends Factory<User> */
class UserFactory extends Factory
{
    public function definition(): array
    {
        $fake = fake();

        return [
            'name'              => $fake->name(),
            'github'            => $fake->optional()->userName(),
            'telegram'          => $fake->optional()->userName(),
            'whatsapp'          => $fake->optional()->phoneNumber(),
            'email'             => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'provider'          => $fake->randomElement([1, 2]),
            'resume'            => $fake->optional()->url(),
            'remember_token'    => Str::random(10),
        ];
    }

    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
