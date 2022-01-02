<?php

use App\Models\EpaperworkPaperwork;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Index
Breadcrumbs::for('paperwork.creation.index', function(BreadcrumbTrail $trail) {
    $trail->push('E-Paperwork', route('paperwork.creation.index'));
});

// Create
Breadcrumbs::for('paperwork.phase-1.create', function (BreadcrumbTrail $trail) {
    $trail->parent('paperwork.phase-1.index');
    $trail->push('Permohonan', route('paperwork.phase-1.create'));
});

// Create
Breadcrumbs::for('paperwork.phase-1.kerani.show', function (BreadcrumbTrail $trail) {
    $trail->parent('paperwork.phase-1.index');
    $trail->push('Kerani', route('paperwork.phase-1.kerani.show', '1'));
});

Breadcrumbs::for('generated::UZT076VcyxV5opDM', function ($trail) {
    $trail->push('Title Here', route('generated::UZT076VcyxV5opDM'));
});
