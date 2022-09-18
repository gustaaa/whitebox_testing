<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ShowKategoriTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_show_kategori()
    {
        $response = $this->get('/kategori/$kode_kategori');

        $response->assertStatus(302);
    }
}
