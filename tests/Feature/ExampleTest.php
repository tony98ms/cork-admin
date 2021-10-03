<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Livewire\Livewire;
use App\Http\Livewire\Admin\User\UsersList;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /** @test  */
    function can_create_post()
    {
        // $this->actingAs(User::factory()->create());

        Livewire::test(UsersList::class)
            ->set('names', 'Tony')
            ->set('email', 'tsandoval@gmail.com')
            ->set('username', 'tonysam')
            ->set('status', 'activo')
            ->set('rol', 'usuario')
            ->call('createUser');

        $this->assertTrue(User::whereUsername('tonysam')->exists());
    }
    /** @test  */
    function data_is_required()
    {
        Livewire::test(UsersList::class)
            ->set('names', '')
            ->set('email', 'acep')
            ->set('username', '')
            ->set('status', '')
            ->set('rol', '')
            ->call('createUser')
            ->assertHasErrors(['names' => 'required'])
            ->assertHasErrors(['username' => 'required'])
            ->assertHasErrors(['rol' => 'required'])
            ->assertHasErrors(['email' => 'email']);
    }
}
