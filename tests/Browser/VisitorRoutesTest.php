<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class VisitorRoutesTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')

                ->assertSee('BooConnect')
                ->assertSeeLink('Login')
                ->assertSeeLink('Register')

            ;
        });
    }

    /** @test */
    public function a_visitor_can_see_the_login_url_on_the_homepage()
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSeeLink('Login')
                ->clickLink('Login')
                ->assertRouteIs('login')
            ;
        });
    }

    /** @test */
    public function a_visotor_can_see_the_signup_url_on_the_homepage()
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->assertSeeLink('Register')
                ->clickLink('Register')
                ->assertRouteIs('register')
            ;
        });
    }
}
