<?php

Breadcrumbs::for('sitetronic-core-admin-index', function ($trail) {
    $trail->parent('home');
    $trail->push('Site Admin', route('core.index'));
});
