<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PruebaUsuarios extends TestCase
{
    /** @test     */
    public function it_loads_the_users_list_page()
    {
        $this->get('/usuario')
        ->assertStatus(200)
        ->assertSee('usuario');
    }
      /** @test     */
    public function it_loads_the_users_list_new()
    {
      $this->get('/usuario/5')
      ->assertStatus(200)
      ->assertSee('Detalles de usuario: 5');
      //return "Detalles de usuario: {$id}";
    }

    /** @test     */
    public function home()
    {
      if ($this->hola(false)) {
        $this->get('/')
        ->assertStatus(200)
        ->assertSee('Ivan');

      } else {
        return false;
      }
    }

    private function hola($status) {
      if ($status) {
        return "hoa";
      } else {
        return false;
      }
    }
}
