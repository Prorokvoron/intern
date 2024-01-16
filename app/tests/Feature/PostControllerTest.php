<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class PostControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testIndexMethod(): void
    {
        $response = $this->get(route('posts.index'));
        dump($response->json());
        $response->assertStatus(200);
    }

    public function testDeleteMethod()
    {
        $post = DB::table('posts')->first();
        $this->assertNotNull($post);
        $this->delete(route('posts.delete', ['post' => $post->id]));
        $this->assertDatabaseMissing(Post::class, ['id' => $post->id]);
    }

    public function testUpdateMethod()
    {
        $post = DB::table('posts')->inRandomOrder()->first();
        $this->assertNotNull($post);
        $this->putJson(route('posts.update', ['post'=>$post->id]), ['name' => 'test name']);
        $this->assertDatabaseHas(Post::class,['id' => $post->id, 'name' => 'test name']);
    }
}
