<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateKategoriTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_create_kategori()
    {
        $response = $this->get('/kategori/create');

        $response->assertStatus(302);
    }
}
