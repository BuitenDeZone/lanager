<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push(config('app.name'), route('home'));
});

// Home > LANs
Breadcrumbs::for('lans.index', function ($trail) {
    $trail->parent('home');
    $trail->push(__('title.lans'), route('lans.index'));
});

// Home > LANs > [LAN]
Breadcrumbs::for('lans.show', function ($trail, $lan) {
    $trail->parent('lans.index');
    $trail->push($lan->name, route('lans.show', $lan));
});

// Home > LANs > [LAN] > Pages
Breadcrumbs::for('lans.pages.index', function ($trail, $lan) {
    $trail->parent('lans.show', $lan);
    $trail->push(__('title.pages'), route('lans.pages.index', $lan));
});

// Home > LANs > [LAN] > Pages > [Page]
Breadcrumbs::for('lans.pages.show', function ($trail, $lan, $page) {
    $trail->parent('lans.pages.index', $lan);
    $trail->push($page->title, route('lans.pages.show', ['lan' => $lan, 'page' => $page]));
});

// Home > LANs > [LAN] > Events
Breadcrumbs::for('lans.events.index', function ($trail, $lan) {
    $trail->parent('lans.show', $lan);
    $trail->push(__('title.events'), route('lans.events.index', $lan));
});

// Home > LANs > [LAN] > Events > [Event]
Breadcrumbs::for('lans.events.show', function ($trail, $lan, $event) {
    $trail->parent('lans.events.index', $lan);
    $trail->push($event->name, route('lans.events.show', ['lan' => $lan, 'page' => $event]));
});