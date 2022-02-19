<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Index
// Login > CreationIndex
Breadcrumbs::for('paperwork.creation.index', function(BreadcrumbTrail $trail) {
    $trail->push('E-Paperwork', route('paperwork.creation.index'));
});
// Login > CreationIndex > CreationShow[permohonan]
Breadcrumbs::for('paperwork.creation.show', function ($trail) {
    $trail->parent('paperwork.creation.index');
    $trail->push('E-Paperwork', route('paperwork.creation.show'));
});
// Login > CreationIndex > CreationCreate[permohonan]

// Login > ValidationIndex
Breadcrumbs::for('paperwork.validation.index', function ($trail) {
    $trail->push('E-Paperwork', route('paperwork.validation.index'));
});

// Login > ValidationIndex > ValidationShow
Breadcrumbs::for('paperwork.validation.show', function ($trail) {
    $trail->parent('paperwork.validation.index');
    $trail->push('Pengesahan', route('paperwork.validation.show', 1));
});


// Login > ValidationIndex > ValidationCreate [Pengesahan KK]

// Login > SupportIndex
Breadcrumbs::for('paperwork.support.index', function ($trail) {
    $trail->push('E-Paperwork', route('paperwork.support.index'));
});
// Login > SupportIndex > SupportShow [P2engesahan KK]
Breadcrumbs::for('paperwork.support.show', function ($trail) {
    $trail->parent('paperwork.support.index');
    $trail->push('Sokongan Kertas Kerja', route('paperwork.support.show', '2'));
});

// Login > AcceptorIndex
Breadcrumbs::for('paperwork.acceptance.index', function(BreadcrumbTrail $trail) {
    $trail->push('E-Paperwork', route('paperwork.acceptance.index'));
});
// Login > AcceptorIndex > AcceptorShow
Breadcrumbs::for('paperwork.acceptance.show', function ($trail) {
    $trail->parent('paperwork.acceptance.index');
    $trail->push('E-Paperwork', route('paperwork.acceptance.show'));
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
