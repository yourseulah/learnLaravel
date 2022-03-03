<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => rand(1,10), //사용자아이디를 1-10사이숫자로 렌덤하개 생성
            'title' => $this->faker->sentence(), //모의 데이터 만들어라
            'body' => $this->faker->text(100), //모의 데이터 만들어라
        ];
    }
}
