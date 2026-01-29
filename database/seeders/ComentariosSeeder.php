<?php

namespace Database\Seeders;

use App\Models\Coment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComentariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $posts = Post::all();

        $posts->each(function($post){
            Coment::factory(3)->create([
                'post_id' => $post->id                
            ]);
        });
    }
}
