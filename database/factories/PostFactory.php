<?php

namespace Database\Factories;

use App\Enums\{PostStatus, PostType};
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'title'       => $this->faker->sentence(5),
            'description' => $this->faker->paragraph(),
            'company'     => $this->faker->company(),
            'website'     => $this->faker->optional()->url(),
            'status'      => $this->faker->randomElement(PostStatus::toArray()),
            'type'        => $this->faker->randomElement(PostType::toArray()),
            'tags'        => [
                'laravel',
                'wordpress',
                'rest',
            ],
            'slug'    => Str::random(10),
            'link'    => $this->faker->optional()->url(),
            'details' => [
                'remuneration' => 'hour',
                'value'        => 50,
            ],
        ];
    }
}
