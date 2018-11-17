<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use \App\Task as Task;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    use RefreshDatabase;
    

    public function setUp(){
        parent::setUp();
        Task::truncate();
        factory(Task::class, 20)->create();
    }

    public function testReturnsJson()
    {
        $response = $this->get('/tasks/all');
        $response->assertJsonCount(20, 'data');
    }

    public function testOneTask()
    {   
      
        $response = $this->get('/tasks/1');

        $response->assertStatus(200);
    }
    public function testCreateTask(){
        $response = $this->json('POST', '/tasks/create', ['task' => 'Go to the store', 'completed' => 0]);

        $response
        ->assertStatus(200)
        ->assertJson([
            'created' => true,
        ]);
    }

    public function testDeleteTask(){

        $response = $this->json('POST', '/tasks/delete', ['id' => 20 ]);

        $this->assertDatabaseMissing('tasks', 
        [
            'id'=> 20, 
        ]);
    }

    public function testEditTask(){
        $response = $this->json('PUT', '/tasks/update', ['id'=> 1, 'task' => 'This is my edited task... ', 'completed' => 0]);

        $this->assertDatabaseHas('tasks', 
        [
            'id'=> 1, 
            'task' => 'This is my edited task... '
        ]);
    }

    public function testFirstModelExists(){
        //Testing that database has records at the time of running tests
        $task = Task::first();
        $this->assertInstanceOf('\App\Task', $task);
    }
}
