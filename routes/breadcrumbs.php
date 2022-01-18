<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Index

Breadcrumbs::for('paperwork.creation.index', function(BreadcrumbTrail $trail) {
    $trail->push('E-Paperwork', route('paperwork.creation.index'));
});

Breadcrumbs::for('paperwork.validation.index', function ($trail) {
    $trail->push('E-Paperwork', route('paperwork.validation.index'));
});

Breadcrumbs::for('paperwork.support.index', function ($trail) {
    $trail->push('E-Paperwork', route('paperwork.support.index'));
});

Breadcrumbs::for('paperwork.support.show', function ($trail) {
    $trail->parent('paperwork.support.index');
    $trail->push('Sokongan Kertas Kerja', route('paperwork.support.show', '2'));
});

Breadcrumbs::for('paperwork.validation.show', function ($trail) {
    $trail->parent('paperwork.validation.index');
    $trail->push('Pengesahan', route('paperwork.validation.show', 1));
});

// // Create
// Breadcrumbs::for('paperwork.phase-1.create', function (BreadcrumbTrail $trail) {
//     $trail->parent('paperwork.phase-1.index');
//     $trail->push('Permohonan', route('paperwork.phase-1.create'));
// });

// // Create
// Breadcrumbs::for('paperwork.phase-1.kerani.show', function (BreadcrumbTrail $trail) {
//     $trail->parent('paperwork.phase-1.index');
//     $trail->push('Kerani', route('paperwork.phase-1.kerani.show', '1'));
// });
