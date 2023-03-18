<?php

use App\Models\Club;
use App\Models\Course;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as Trail;

Breadcrumbs::for('home', function (Trail $trail) {
    $trail->push('Inicio', route('home'));
});

Breadcrumbs::for('courses.index', function (Trail $trail) {
    $trail->push('Lista de cursos', route('courses.index'));
});

Breadcrumbs::for('clubs.index', function (Trail $trail) {
    $trail->push('Lista de clubes', route('clubs.index'));
});

Breadcrumbs::for('clubs.memberships', function (Trail $trail, Club $club) {
    $trail->parent('clubs.index');
    $trail->push('Miembros', route('clubs.memberships', ['club' => $club]));
});

Breadcrumbs::for('courses.enrollments', function (Trail $trail, Course $course) {
    $trail->parent('courses.index');
    $trail->push('Matrícula', route('courses.enrollments', ['course' => $course]));
});

Breadcrumbs::for('items.stock.index', function (Trail $trail) {
    $trail->push('Inventario actual', route('items.stock.index'));
});

