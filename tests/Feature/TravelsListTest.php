<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Travel;
use Tests\TestCase;

class TravelsListTest extends TestCase
{
   use RefreshDatabase;
    public function test_travels_list_returns_paginated_data_correctly(): void
    {
        Travel::factory(count:16)->create(['is_public'=>true]);
        $response = $this->get('/api/v1/travels');

        $response->assertStatus(200);
        $response->assertJsonCount(count:15, key:'data');
        $response->assertJsonPath('meta.last_page', expect: 2);
    }
}
