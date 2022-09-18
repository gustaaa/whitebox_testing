<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LaporanKategoriTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_laporan_kategori()
    {
        $response = $this->get('/laporan/kategori');

        $response->assertStatus(302);
    }
}
