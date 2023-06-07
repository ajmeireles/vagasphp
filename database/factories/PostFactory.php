<?php

namespace Database\Factories;

use App\Enums\{PostModality, PostModel, PostSpecification, PostStatus, PostType};
use App\Models\{Post, User};
use Illuminate\Database\Eloquent\Factories\Factory;

/** @extends Factory<Post> */
class PostFactory extends Factory
{
    public function definition(): array
    {
        $fake = fake();

        return [
            'user_id'       => User::factory(),
            'specification' => $fake->randomElement(PostSpecification::toArray()),
            'status'        => $fake->randomElement(PostStatus::toArray()),
            'type'          => $fake->randomElement(PostType::toArray()),
            'model'         => $fake->randomElement(PostModel::toArray()),
            'title'         => $fake->sentence(5),
            'description'   => $fake->paragraph(5),
            'company'       => [
                'name'    => $fake->company(),
                'website' => $fake->url(),
            ],
            'modality'     => $fake->randomElement(PostModality::toArray()),
            'link'         => $fake->optional()->url(),
            'remuneration' => [
                'type'  => $fake->randomElement(['hour', 'fixed']),
                'value' => $fake->randomFloat(2, 10, 1000),
            ],
            'requirement' => [
                'php',
                'laravel',
                'lumen',
            ],
            'notification'  => $fake->optional()->email(),
            'configuration' => [
                'resume' => true,
                'github' => true,
            ],
        ];
    }
}
