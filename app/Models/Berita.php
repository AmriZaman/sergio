<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Berita
{
    private static $blog_posts =
    [
        [
            "$judul" => "Judul Berita pertama",
            "$penulis" => "Penulis Berita pertama",
            "$tanggal" => "21-10-2021",
            "$isi" => "Isi berita pertama, Ea elit cupidatat eiusmod reprehenderit occaecat sit enim labore et pariatur aute aute laboris sint. Amet cupidatat amet anim dolor aliqua aliquip et consequat aliquip adipisicing sit laboris velit. Est enim nisi duis velit exercitation ut nisi. Exercitation deserunt laboris eiusmod aliqua ex et cillum sit. Ex sint labore est ullamco esse anim in ad commodo reprehenderit.",
            "$slug" => "judul-berita-satu"
        ],
        [
            "$judul" => "Judul Berita kedua",
            "$penulis" => "Penulis Berita kedua",
            "$tanggal" => "30-10-2021",
            "$isi" => "Isi berita kedua, Sunt magna eu adipisicing id amet aliquip qui exercitation dolor cillum. Ut nostrud cillum aliquip duis amet amet minim minim nulla exercitation veniam laborum sit irure. In qui tempor laborum incididunt dolore ipsum ad mollit veniam. Veniam laborum reprehenderit sit aliquip nulla nulla fugiat. In commodo labore non voluptate.",
            "$slug" => "judul-berita-dua"
        ],
    ];

    public static function all()
    {
        return self::$blog_posts;
    }
}