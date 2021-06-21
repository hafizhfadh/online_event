<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category = ['concert','exhibition','event_online','festival','workshop'];
        $status = ['publish','unpublish'];
        return [
            'event_name' => $this->faker->sentence(5),
            'catagory' => $this->faker->randomElement($category),
            'image' => "noimage.jpeg",
            'hosted_by' => $this->faker->name,
            'event_date' => $this->faker->date(),
            'event_time' => $this->faker->dateTime(),
            'location' => $this->faker->address,
            'event_description' => $this->faker->sentence(60),
            'terms_and_condition' => $this->faker->sentence(60),
            'status' => $this->faker->randomElement($status),
            'number_of_ticket' => rand(10,2000),
            'price' => rand(1000000,10000000),
            'ticket_description' => $this->faker->sentence(60),
        ];
    }
}
