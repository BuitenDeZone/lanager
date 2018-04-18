<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Phrases
    |--------------------------------------------------------------------------
    |
    | Usage examples:
    | - Flash messages
    | - Help text
    | - Success / warning / error messages
    |
    | Text should:
    | - Use sentence case
    | - Only contain one sentence
    | - Not be terminated with a full stop (.)
    */

    // Copyright & Licensing
    'is-copyright' => 'is ©',
    'and-licensed-under' => 'and licensed under',
    'powered-by-steam' => 'Powered by Steam',

    // User interface
    'toggle-navigation' => 'Toggle navigation',

    // Account Authentication
    'profile-update-required' => 'Please update your profile to continue',
    'please-sign-in' => 'Please sign in through Steam',
    'no-steam-account' => 'Don\'t have a Steam account? No problem!',
    'create-steam-account' => 'Create a Steam account for free',
    'provider-not-supported' => 'Unsupported authentication provider ":provider"',

    // Roles
    'user-already-has-role' => ':user has already been given the role :role',
    'role-successfully-assigned' => ':user has been given the role :role',
    'role-successfully-unassigned' => ':user no longer has the role :role',

    // Steam Apps Import
    'requesting-apps-from-steam' => 'Requesting all apps from Steam',
    'preparing-data' => 'Preparing data',
    'importing-apps-from-steam' => 'Importing :count apps from Steam into database',
    'updating-apps-in-db-and-adding-new' => 'Updating :count apps already in database and adding new apps from Steam',
    'import-complete' => 'Steam App import complete',

    // Steam States Import
    'no-steam-users-to-import' => 'No Steam users to import',
    'requesting-current-status-of-count-users-from-steam' => 'Requesting current status of :count users from Steam',
    'unable-to-import-state-for-user' => 'Unable to import user state for user :id - :error',
    'successfully-imported-states-for-x-of-y-users' => 'Successfully imported states for :x of :y users from Steam',

    // General purpose
    'item-created' => ':Item successfully created',
    'no-items-found' => 'No :item found',
    'the-following-errors-were-encountered' => 'The following errors were encountered',

];