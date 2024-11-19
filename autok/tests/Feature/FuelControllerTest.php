<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Fuel;

class FuelControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_view_fuels_index(){

        Fuel::factory()->count(3)->create();

        $response = $this->get(route('fuels'));

        $response->assertStatus(200);

        $response->assertViewHas('entities');
    }
}
