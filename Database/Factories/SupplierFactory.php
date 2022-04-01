<?php
namespace Modules\Suppliers\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Suppliers\Models\Supplier;

class SupplierFactory extends Factory
{
    protected $model = Supplier::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name()
        ];
    }
}