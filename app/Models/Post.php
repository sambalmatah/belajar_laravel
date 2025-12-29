<?php 

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Yudi Ari Nugroho',
            'post' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non aliquam delectus distinctio commodi eos dolores omnis ab asperiores rem iste, beatae alias quae in consectetur, praesentium deleniti repellendus saepe dolorum.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Yudi Ari Nugroho',
            'post' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam in perspiciatis veniam eos nobis provident facere repellendus incidunt, praesentium ipsum nulla ipsa repellat, quae saepe dolore temporibus nemo, commodi voluptate?'
        ]
    ];
    }

    public static function find($slug)
    {
        // return Arr::first(static::all(), function($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        return Arr::first(static::all(), fn($post) => $post['slug'] == $slug) ?? abort(404);
    }

}


?>