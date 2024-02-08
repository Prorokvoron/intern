<?php

namespace Tests\Feature;


use App\Models\Task;

use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class TaskControllerTest extends TestCase
{

    public function testIndexMethod(): void
    {
        $response = $this->get(route('tasks.index'));
        $response->assertStatus(200);
    }


    public function testShowMethod(): void
    {
        $task = DB::table('tasks')->inRandomOrder()->limit(1)->first();
        $response = $this->get(route('tasks.show', ['task' => $task->id]));
        $response->assertStatus(200);
    }

    public function testDeleteMethod()
    {
        $task = DB::table('tasks')->inRandomOrder()->limit(1)->first();
        $this->assertNotNull($task);
        $this->delete(route('tasks.delete', ['task' => $task->id]));
        $this->assertDatabaseMissing(Task::class, ['id' => $task->id]);
    }

    public function testUpdateMethod()
    {
        $testnum = '1';
        $testStr = 'Test string';
        $task = DB::table('tasks')->inRandomOrder()->first();
        $this->assertNotNull($task);
        $this->putJson(route('tasks.update', ['task'=>$task->id]),
            ['card_id'=>$testnum,'client_id'=>$testnum,'title' => $testStr, 'description' => $testStr]);
        $this->assertDatabaseHas(Task::class,['id' => $task->id,
            'card_id'=>$testnum,'client_id'=>$testnum,'description' => $testStr, 'title' => $testStr,]);
    }


    public function testCreateMethod()
    {
        $task = Task::factory()->raw();
        $response = $this->putJson(route('tasks.store'),
            $task);
        $response->assertCreated();
    }
}
