<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sony Tri Prasetyo",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus ad omnis sit minima odio vitae esse? Debitis quam officiis voluptate aperiam ut quidem consectetur dolor id cumque sint praesentium repudiandae fugit sit at reiciendis provident, commodi illum temporibus incidunt neque iste explicabo fugiat corporis quas? Voluptatum iste laudantium odio ratione?"
        ],

        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Isti Jabath",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque cupiditate doloribus iusto possimus animi veniam labore, accusamus illum consectetur voluptatem id in repudiandae aliquam aspernatur minima. Corporis eum aperiam a quas fuga voluptas, voluptate nulla ipsam impedit fugit non quod odio quam, neque porro tempora blanditiis repudiandae tenetur obcaecati ratione vero at omnis! Optio reprehenderit provident voluptas quas exercitationem, tenetur itaque ullam quam modi asperiores tempore similique est saepe vel tempora maxime nemo quos autem sequi atque sunt. Dignissimos ipsa dolore nihil ipsum nulla numquam, corrupti ad. Iure quas laborum expedita impedit qui veniam, mollitia accusantium culpa quaerat consectetur laudantium."
        ],
    ];

    public static function all()
    {
        // jika property biasa menggunakan $this, namun karena property static maka menggunakan self
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug); // mengambil nilai array pertama setiap
        // kondisi dimana 'slug' sama dengan slag
    }
}
