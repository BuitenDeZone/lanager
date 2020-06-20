<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\TableNode;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Zeropingheroes\Lanager\Console\Kernel;
use Zeropingheroes\Lanager\Lan;
use Zeropingheroes\Lanager\User;
use Zeropingheroes\Lanager\UserOAuthAccount;
use Zeropingheroes\Lanager\Venue;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends TestCase implements Context
{
    use DatabaseMigrations;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        parent::setUp();
        $this->artisan('db:seed');
        $this->app[Kernel::class]->setArtisan(null);
    }

    /**
     * @Given an admin with username :username exists
     */
    public function anAdminWithUsernameExists($username)
    {
        $user = factory(User::class)->create(
            [
                'username' => $username,
            ]
        )->each(
            function ($user) {
                $user->accounts()->save(factory(UserOAuthAccount::class)->make());
            }
        );

        // Currently not required as UserObserver::class assigns super admin role when first user created
        // $role = Role::where('name', 'super-admin')->first();
        // $user->roles()->attach($role->id, ['assigned_by' => $user->id]);
    }

    /**
     * @Given /^The following venue exists:$/
     */
    public function theFollowingVenueExists(TableNode $venues)
    {
        foreach ($venues as $venue) {
            Venue::create(
                [
                    'name' => $venue['name'],
                    'street_address' => $venue['street_address'],
                    'description' => $venue['description'],
                ]
            );
        }
    }

    /**
     * @Given /^The following LAN exists:$/
     */
    public function theFollowingLANExists(TableNode $lan)
    {
        foreach ($lan as $lan) {
            $lan['published'] = $lan['published'] == 'yes' ? 1 : 0;
            Lan::create(
                [
                    'name' => $lan['name'],
                    'description' => $lan['description'],
                    'start' => $lan['start'],
                    'end' => $lan['end'],
                    'venue_id' => Venue::where('name', '=', $lan['venue'])->first()->id,
                    'published' => $lan['published'],
                ]
            );
        }
    }
}
