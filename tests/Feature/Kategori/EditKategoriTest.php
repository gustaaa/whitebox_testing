<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EditKategoriTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_edit_kategori()
    {
        $response = $this->get('/kategori/$kode_kategori/edit');

        $response->assertStatus(302);
    }
}
