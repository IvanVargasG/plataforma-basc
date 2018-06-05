<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsuarioTest extends TestCase
{
    /**@test */
    function it_welcome_users_with_apodo()
    {
        $this-> get('/saludo/ivan/vargas')
        ->assertStatus(200)
        ->assertSee("Bienvenido: ivan, tu apodo es vargas");
    }

    /**@test*/

    function it_welcome_users_with_apodo()
    {
      $this->get('/saludo/ivan')
      .
      ->assertStatus(200)
      ->assertSee("Bienvenido ivan")

    }


}
