<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Index
Breadcrumbs::for('paperwork.phase-1.index', function(BreadcrumbTrail $trail) {
    $trail->push('E-Paperwork', route('paperwork.phase-1.index'));
});

// Create
Breadcrumbs::for('paperwork.phase-1.create', function (BreadcrumbTrail $trail) {
    $trail->parent('paperwork.phase-1.index');
    $trail->push('Permohonan', route('paperwork.phase-1.create'));
});
