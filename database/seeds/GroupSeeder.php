<?php

use Illuminate\Database\Seeder;
use App\Group;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_seeds = [
            ['id' => '1', 'name' => 'M3CS2511A', 'part' => '1A'],
            ['id' => '2', 'name' => 'M3CS2512A', 'part' => '2A'],
            ['id' => '3', 'name' => 'M3CS2513A', 'part' => '3A'],
            ['id' => '4', 'name' => 'M3CS2514A', 'part' => '4A'],
            ['id' => '5', 'name' => 'M3CS2515A', 'part' => '5A'],
            ['id' => '6', 'name' => 'M3CS2516A', 'part' => '6A'],
            ['id' => '7', 'name' => 'M3CS2517A', 'part' => '7A'],
        ];

        foreach($data_seeds as $seed) {
            Group::firstOrCreate($seed);
        }
    }
}
