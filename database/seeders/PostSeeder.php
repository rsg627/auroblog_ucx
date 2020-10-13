<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\post;
use GrahamCampbell\Markdown\Facades\Markdown;

class PostSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $i = 0;
        for ($i = 0; $i < 30; $i++) {
            $post = new post;
            $post->title = "hola mundo" . $i;
            // $post->slug = "HIx" . $i;
            $post->content = "#hola" . $i;
            $post->author = "rsg" . $i;
//            $post->content_md= Markdown::convertToHtml($post->content);
            $post->save();
        }
    }

}
