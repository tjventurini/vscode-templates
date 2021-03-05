{{#def.prompt('NAMESPACE', 'Enter a Namespace for this Factory.')}}
{{#def.prompt('MODEL', 'Enter the name of the Model this Factory is for.')}}
<?php

namespace {{=$.NAMESPACE}};

use Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class {{=$.NAME}} extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = {{=$.MODEL}}::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
        ];
    }
}
