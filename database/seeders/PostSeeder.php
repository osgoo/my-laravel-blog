<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post; // Post моделийг дуудах

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 10 ширхэг пост үүсгэх давталт
        for ($i = 1; $i <= 10; $i++) {
            Post::create([
                'title' => 'Test Post Title ' . $i,
                'body' => 'This is the body content for test post number ' . $i . '. Lorem ipsum dolor sit amet...',
            ]);
        }
    }
}
