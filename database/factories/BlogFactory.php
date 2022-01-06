<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Blog::class;


    public function definition()
    {
        $title = $this->faker->sentence(rand(3,7));
        $categor = ['sport','development','music','life'];
        return [
            'title'=>$title,
            'slug'=>Str::slug($title),
            'description'=>$this->faker->text(100),
            'category'=>$categor[rand(0,3)],

        ];
    }
}
