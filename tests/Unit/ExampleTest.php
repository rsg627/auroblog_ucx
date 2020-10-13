<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use App\Models\post;

use Illuminate\Support\Facades\Log;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
class ExampleTest extends TestCase {

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest() {
        $post = new post;
        $post->title = "hola Unicx";
        $post->content = "@markdown #Bar @endmarkdown";
        $post->author = "rsg";
        $post->save();
        Log::info("Original: " . $post->content . " ----> Markadown: " . $post->content_md);
    }


    public function testExample() {
        Log::info("Original: 2");
//        $response = $this->withHeaders([
//                    'X-Header' => 'Value',
//                ])->get('/');
//        dd($response);
       // $response = $this->get('/');

       // $response->assertStatus(200);
       $response =  $this->get('/', [
            'HTTP_USER_AGENT' => 'foo crawler',
            'custom-header' => 'some-value',
        ]);
       $response->assertStatus(200);
       //  Log::info("Original: ".$response->assertStatus(200));
      //  $this->assertTrue(true);
    }




}
