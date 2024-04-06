<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use Faker\Generator as Faker;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 2; $i++) {
            $type = new Type();
            $type->name = $faker->randomElement(['Frontend', 'Backend']);
            $type->slug = Str::slug($type->name, '-');
            $type->save();
        }
    }
}
