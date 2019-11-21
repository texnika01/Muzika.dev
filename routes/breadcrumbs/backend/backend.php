<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});


// Home > Events
Breadcrumbs::register('admin.events', function ($breadcrumbs) {
	$breadcrumbs->parent('admin.dashboard');
	$breadcrumbs->push('Event', route('admin.events'));
});
Breadcrumbs::register('admin.events.create', function ($breadcrumbs) {
	$breadcrumbs->parent('admin.dashboard');
	$breadcrumbs->push('Events Create', route('admin.event.create'));
});

Breadcrumbs::for('admin.event.edit', function ($trail, $id) {
	$post = \App\Models\Pages\Event::findOrFail($id);
	$trail->parent('admin.dashboard');
	$trail->push($post->title, route('admin.event.edit', $post));
});

// Home > Genres
Breadcrumbs::register('admin.genres', function ($breadcrumbs) {
	$breadcrumbs->parent('admin.dashboard');
	$breadcrumbs->push('Genres', route('admin.genres'));
});
Breadcrumbs::register('admin.genres.create', function ($breadcrumbs) {
	$breadcrumbs->parent('admin.dashboard');
	$breadcrumbs->push('Genres Create', route('admin.genres.create'));
});
Breadcrumbs::for('admin.genres.edit', function ($trail, $id) {
	$post = \App\Models\Pages\Genres::findOrFail($id);
	$trail->parent('admin.dashboard');
	$trail->push($post->name, route('admin.genres.edit', $post));
});


// Home > Songs
Breadcrumbs::register('admin.song', function ($breadcrumbs) {
	$breadcrumbs->parent('admin.dashboard');
	$breadcrumbs->push('Songs', route('admin.song'));
});
Breadcrumbs::register('admin.song.create', function ($breadcrumbs) {
	$breadcrumbs->parent('admin.dashboard');
	$breadcrumbs->push('Songs Create', route('admin.song.create'));
});
Breadcrumbs::for('admin.song.edit', function ($trail, $id) {
	$post = \App\Models\Pages\Songs::findOrFail($id);
	$trail->parent('admin.dashboard');
	$trail->push($post->title, route('admin.song.edit', $post));
});


// Home > Style
Breadcrumbs::register('admin.style', function ($breadcrumbs) {
	$breadcrumbs->parent('admin.dashboard');
	$breadcrumbs->push('Style', route('admin.style'));
});
Breadcrumbs::register('admin.style.create', function ($breadcrumbs) {
	$breadcrumbs->parent('admin.dashboard');
	$breadcrumbs->push('Style Create', route('admin.style.create'));
});
Breadcrumbs::for('admin.style.edit', function ($trail, $id) {
	$post = \App\Models\Pages\Styles::findOrFail($id);
	$trail->parent('admin.dashboard');
	$trail->push($post->title, route('admin.style.edit', $post));
});



// Home > Text
Breadcrumbs::register('admin.text', function ($breadcrumbs) {
	$breadcrumbs->parent('admin.dashboard');
	$breadcrumbs->push('Text', route('admin.text'));
});
Breadcrumbs::register('admin.text.create', function ($breadcrumbs) {
	$breadcrumbs->parent('admin.dashboard');
	$breadcrumbs->push('Text Create', route('admin.text.create'));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
