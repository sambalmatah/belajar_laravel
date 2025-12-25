<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

// membuat route baru ke view home
Route::get('/posts', function () {
    $posts = [
        ['title' => 'Judul Artikel 1',
        'author' => 'Yudi Ari Nugroho',
        'post' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non aliquam delectus distinctio commodi eos dolores omnis ab asperiores rem iste, beatae alias quae in consectetur, praesentium deleniti repellendus saepe dolorum.'
        ],
        ['title' => 'Judul Artikel 1',
        'author' => 'Yudi Ari Nugroho',
        'post' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam in perspiciatis veniam eos nobis provident facere repellendus incidunt, praesentium ipsum nulla ipsa repellat, quae saepe dolore temporibus nemo, commodi voluptate?'
        ]
    ];
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});