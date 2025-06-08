<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'iphone 17',
            'description' => 'lorem ipsum 1',
            'category_id' => 1,
        ]);
        Post::create([
            'title' => 'ios 26',
            'description' => 'lorem ipsum 3',
            'category_id' => 1,
        ]);
        Post::create([
            'title' => '207',
            'description' => 'lorem ipsum 2',
            'category_id' => 2,
        ]);
    }
}
