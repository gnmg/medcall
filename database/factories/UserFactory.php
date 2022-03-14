<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

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
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }


    /**
     * Indicate that the user should have a subscription plan.
     *
     * @param  string  $planId
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function withSubscription($planId = null)
    {
        return $this->afterCreating(function ($user) use ($planId) {
            $subscription = $user->subscriptions()->create([
                'name' => 'default',
                'stripe_id' => Str::random(10),
                'stripe_status' => 'active',
                'stripe_plan' => $planId,
                'quantity' => 1,
                'trial_ends_at' => null,
                'ends_at' => null,
            ]);

            $subscription->items()->create([
                'stripe_id' => Str::random(10),
                'stripe_plan' => $planId,
                'quantity' => 1,
            ]);
        });
    }
}
