<?php

namespace Tests\Feature;

use App\Models\Item;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ItemTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

        /**
     * test index function
     */
    public function test_that_user_can_read_all_items(): void
    {
        $item = Item::factory(10)->create();
        $response = $this->get('api/items');
        $response->assertSee($item[0]->id);
    }


}
