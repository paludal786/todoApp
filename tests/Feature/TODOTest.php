<?php

namespace Tests\Feature;

use App\Models\Activity;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TODOTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function testExample()
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }

    public function testAddTodo()
    {
        $data = factory(Activity::class)->create()->toArray();
        // $data['_token'] = csrf_token();
        // dd($data);
        $response = $this->json('POST', 'api/todo/add', $data);
        dd($response);
        return $response->assertStatus(200);
    }
}
