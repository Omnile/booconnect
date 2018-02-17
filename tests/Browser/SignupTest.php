<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class SignupTest extends DuskTestCase
{
    // use RefreshDatabase;
    use DatabaseMigrations;

    protected $clearCookiesBetweenTests = true;

    protected $email;
    protected $password;
    protected $name;
    protected $gender;
    protected $username;

    public function setup()
    {
        parent::setUp();

        $user = factory(\App\User::class, 1)->make()->first();

        $this->email = $user->email;
        $this->password = $user->password;
        $this->name = $user->name;
        $this->gender = $user->gender;
        $this->username = $user->username;
    }

    /** @test */
    public function a_user_can_register()
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                ->type('email', $this->email)
                ->type('name', $this->name)
                ->select('gender', $this->gender)
                ->type('username', $this->username)
                ->type('password', $this->password)
                ->type('password_confirmation', $this->password)
                ->press('.btn')
                ->assertRouteIs('home')
            ;
        });
    }
}
