<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

$user = User::factory()->create();

$posts = Post::factory()
            ->count(3)
            ->for($user)
            ->create();

            
class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     * //
     * */

    public function test_models_can_be_persisted() {
    // Create a single App\Models\User instance...
    $article = Article::factory()->create();

    // Create three App\Models\User instances...
    $article = Article::factory()->count(3)->create();

    // Use model in tests...
}
     
    public function definition()
    {
        return [
            'title'=> $this->faker->title(),
            'genre' => $this->faker->genre(),
            'article_content'=> $this->faker->article_content(),
            'timestamps' => $this->faker->timestamps(),
        ];
    }

    public function configure()
    {
        return $this->afterMaking(function (Article $article) {
            //
        })->afterCreating(function (Article $article) {
            //
        });
    }
}
