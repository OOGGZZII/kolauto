<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Maker;

class carModelControllerTest extends TestCase
{
    use RefreshDatabase;
    public function test_user_can_view_makers_models(){
        $maker = Maker::factory()->create();
        $response = $this->get(route('makerModels', $maker->id));
        $response->assertViewHas('entities');
    }
}
