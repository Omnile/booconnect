<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Hash;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    use DatabaseMigrations;

    protected $clearCookiesBetweenTests = true;

    protected $email;
    protected $password;
    protected $name;

    public function setup()
    {
        parent::setUp();

        $user = factory(\App\User::class, 1)->create([
            'password' => Hash::make($password = 'google'),
        ])->first();

        $this->email = $user->email;
        $this->name = $user->name;
        $this->password = $password;
    }

    /** @test */
    public function a_registered_user_can_login()
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->type('email', $this->email)
                ->type('password', $this->password)
                ->press('.btn')
                ->assertRouteIs('home')
            ;
        });
    }
}
