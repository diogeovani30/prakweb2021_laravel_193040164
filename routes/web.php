<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "M.Dio Geovani",
        "email" => "mdio.geovani22@gmail.com",
        "image" => "dio.jpg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "M. Dio Geovani",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad amet optio saepe excepturi, sunt praesentium nemo recusandae expedita totam ab temporibus odio. Quos exercitationem consequuntur vero optio dicta minima, dolorem, neque possimus ipsa, repellendus explicabo facilis inventore maiores nostrum ducimus. Ut eius assumenda deserunt doloremque harum at aperiam facere aut. Nam eligendi eveniet vel quos nostrum consequuntur eum pariatur ratione esse molestiae maxime atque, enim reprehenderit? Illum dolore aperiam voluptas quam aut unde, eius praesentium inventore cupiditate sed architecto eaque!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Restu Pratama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad amet optio saepe excepturi, sunt praesentium nemo recusandae expedita totam ab temporibus odio. Quos exercitationem consequuntur vero optio dicta minima, dolorem, neque possimus ipsa, repellendus explicabo facilis inventore maiores nostrum ducimus. Ut eius assumenda deserunt doloremque harum at aperiam facere aut. Nam eligendi eveniet vel quos nostrum consequuntur eum pariatur ratione esse molestiae maxime atque, enim reprehenderit? Illum dolore aperiam voluptas quam aut unde, eius praesentium inventore cupiditate sed architecto eaque!"
        ]
    ];


    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});



// halaman single post


Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "M. Dio Geovani",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad amet optio saepe excepturi, sunt praesentium nemo recusandae expedita totam ab temporibus odio. Quos exercitationem consequuntur vero optio dicta minima, dolorem, neque possimus ipsa, repellendus explicabo facilis inventore maiores nostrum ducimus. Ut eius assumenda deserunt doloremque harum at aperiam facere aut. Nam eligendi eveniet vel quos nostrum consequuntur eum pariatur ratione esse molestiae maxime atque, enim reprehenderit? Illum dolore aperiam voluptas quam aut unde, eius praesentium inventore cupiditate sed architecto eaque!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Restu Pratama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad amet optio saepe excepturi, sunt praesentium nemo recusandae expedita totam ab temporibus odio. Quos exercitationem consequuntur vero optio dicta minima, dolorem, neque possimus ipsa, repellendus explicabo facilis inventore maiores nostrum ducimus. Ut eius assumenda deserunt doloremque harum at aperiam facere aut. Nam eligendi eveniet vel quos nostrum consequuntur eum pariatur ratione esse molestiae maxime atque, enim reprehenderit? Illum dolore aperiam voluptas quam aut unde, eius praesentium inventore cupiditate sed architecto eaque!"
        ]
    ];

    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view(
        'post',
        [
            "title" => "Single Post",
            "post" => $new_post
        ]
    );
});
