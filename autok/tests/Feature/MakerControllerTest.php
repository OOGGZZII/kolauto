<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Maker;

class MakerControllerTest extends TestCase
{
    use RefreshDatabase;
    public function test_user_can_view_makers_index(){

        Maker::factory()->count(3)->create();

        $response = $this->get(route('makers'));

        $response->assertStatus(200);

        $response->assertViewHas('entities');
    }
    public function test_user_can_create_maker(){
        $makerData = ['name' => 'New Maker'];

        $response = $this->post(route('makers.store'), $makerData);

        $response->assertRedirect(route('makers'));

        $this->assertDatabaseHas('makers', $makerData);

        $response->assertSessionHas('success', 'Sikeresen hozzáadva');
    }
    public function test_user_can_update_maker(){
        $maker = Maker::factory()->create();

        $updateData = ['name' => 'Updated Maker'];

        $response = $this->patch(route('makers.update', $maker->id), $updateData);

        $response->assertRedirect(route('makers'));

        $this->assertDatabaseHas('makers', $updateData);

        $response->assertRedirect(route('makers'));

        $response->assertSessionHas('success', 'Sikeresen módosítva');

    }

    public function test_user_can_delete_maker(){
        $maker = Maker::factory()->create();

        $response = $this->delete(route('makers.destroy', $maker->id));

        $this->assertDatabaseMissing('makers', ['id' => $maker->id]);

        $response->assertRedirect(route('makers'));

        $response->assertSessionHas('success', 'Sikeresen törölve');
    }


}
