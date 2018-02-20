<?php

// Home
<<<<<<< HEAD


// Home
=======
>>>>>>> 9c18da2fd4a9a14ffc85a5301e9c9aea5f0f93e1
Breadcrumbs::register('home', function ($breadcrumbs) {
    $breadcrumbs->push('Home', route('home'));
});

// Home > About
Breadcrumbs::register('denuncia', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Denuncias', route('denuncias'));
});

// Home > Blog
Breadcrumbs::register('chat', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Chat', route('chat'));
});

// Home > Blog > [Category]
Breadcrumbs::register('crear', function ($breadcrumbs) {
    $breadcrumbs->parent('denuncia');
    $breadcrumbs->push('Crear Denuncias', route('crear'));
});

<<<<<<< HEAD
Breadcrumbs::register('crear1', function ($breadcrumbs) {
    $breadcrumbs->parent('noticia');
    $breadcrumbs->push('Crear Noticia', route('crear1'));
});


Breadcrumbs::register('noticia', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Noticias', route('noticia'));
});



=======
>>>>>>> 9c18da2fd4a9a14ffc85a5301e9c9aea5f0f93e1
