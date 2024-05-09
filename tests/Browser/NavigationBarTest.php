<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class NavigationBarTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test_locations_link_goes_to_locations()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Locations')
                    ->assertPathIs('/locations');
        });
    }
}
