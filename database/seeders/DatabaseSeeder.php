<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\tag;
use App\Models\User;
use Illuminate\Container\Attributes\Tag as AttributesTag;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        City::create(['name'=>'bandung']);
        City::create(['name'=>'jakarta']);
        City::create(['name'=>'semarang']);
        City::create(['name'=>'surabaya']);
        City::create(['name'=>'bali']);

        Tag::create(['name' => 'workshop', 'slug'=>'workshop']);
        Tag::create(['name' => 'music concert', 'slug'=>'music-concert']);
        Tag::create(['name' => 'games, e-sport', 'slug'=>'games-e-sport']);
    }
}
