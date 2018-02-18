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

    // protected $email;
    protected $password;
    protected $username;

    public function setup()
    {
        parent::setUp();

        $user = factory(\App\User::class, 1)->create([
            'password' => Hash::make($password = 'google'),
        ])->first();

        // $this->email = $user->email;
        $this->username = $user->username;
        $this->password = $password;
    }

    /** @test */
    public function a_registered_user_can_login()
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->type('username', $this->username)
                ->type('password', $this->password)
                ->press('.btn')
                ->assertRouteIs('home')
            ;
        });
    }
}
