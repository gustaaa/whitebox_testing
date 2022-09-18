<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndexKategoriTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_index_kategori()
    {
        $response = $this->get('/kategori');

        $response->assertStatus(302);
    }
}
