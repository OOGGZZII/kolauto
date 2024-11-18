<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Maker;

class MakerControllerTest extends TestCase
{
    use RefreshDatabase;
    public function test_user_can_view_makes_index(){

        Maker::factory()->count(3)->create();

        $response = $this->get(route('makers'));

        $response->assertStatus(200);

        //$response->assertViewHas('makers');
    }
    public function test_example(): void
    {
        $this->assertTrue(true);
    }
}
