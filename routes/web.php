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
        "name" => "Dhiya Ulhaq Ramadhanty",
        "email" => "13dhiyaulhaq@gmail.com",
        "image" => "dhiya.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertma",
            "slug" => "judul-post-pertama",
            "author" => "Dhiya Ulhaq Ramadhanty",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nam, reiciendis reprehenderit dolores distinctio et id aliquam officia iure ipsum obcaecati doloribus, animi porro ratione! Reprehenderit, similique ipsa sed fugiat a eaque recusandae dolores! Praesentium temporibus labore debitis, corporis voluptas ipsam dolor odit fugiat? Voluptate quia, odit esse vitae, blanditiis repudiandae officia, sed explicabo accusantium alias libero ab in soluta delectus fugiat fugit! Vero asperiores, architecto porro quisquam dolorem corporis ullam nemo et, pariatur ea magnam, consequatur assumenda. Iste, odit!    ",
    
        ],
    
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post=kedua",
            "author" => "Atuy galon",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias repellendus in vel neque blanditiis veniam odit quaerat accusantium voluptatibus aut asperiores praesentium eaque atque autem suscipit, nihil modi temporibus tempora sit, corporis provident eveniet doloremque numquam! Accusamus consectetur adipisci vero at tempore, dolores eligendi? Quisquam eaque molestias perspiciatis perferendis aliquam sint. In fuga, nemo quo quia quibusdam nisi minima reiciendis illo est maiores cumque inventore a iste modi eveniet! Quisquam blanditiis nihil, et praesentium voluptatem sapiente, ex distinctio quos accusantium, velit in dolor. Vero, velit id tempore unde sint dolorem laboriosam dolores minus, iusto voluptas enim officia ab obcaecati impedit? ",
            
        ]
        ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post

Route ::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertma",
            "slug" => "judul-post-pertama",
            "author" => "Dhiya Ulhaq Ramadhanty",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nam, reiciendis reprehenderit dolores distinctio et id aliquam officia iure ipsum obcaecati doloribus, animi porro ratione! Reprehenderit, similique ipsa sed fugiat a eaque recusandae dolores! Praesentium temporibus labore debitis, corporis voluptas ipsam dolor odit fugiat? Voluptate quia, odit esse vitae, blanditiis repudiandae officia, sed explicabo accusantium alias libero ab in soluta delectus fugiat fugit! Vero asperiores, architecto porro quisquam dolorem corporis ullam nemo et, pariatur ea magnam, consequatur assumenda. Iste, odit!    ",
    
        ],
    
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post=kedua",
            "author" => "Atuy galon",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias repellendus in vel neque blanditiis veniam odit quaerat accusantium voluptatibus aut asperiores praesentium eaque atque autem suscipit, nihil modi temporibus tempora sit, corporis provident eveniet doloremque numquam! Accusamus consectetur adipisci vero at tempore, dolores eligendi? Quisquam eaque molestias perspiciatis perferendis aliquam sint. In fuga, nemo quo quia quibusdam nisi minima reiciendis illo est maiores cumque inventore a iste modi eveniet! Quisquam blanditiis nihil, et praesentium voluptatem sapiente, ex distinctio quos accusantium, velit in dolor. Vero, velit id tempore unde sint dolorem laboriosam dolores minus, iusto voluptas enim officia ab obcaecati impedit? ",
            
        ]
        ];
      

        $new_post = [];
        foreach($blog_posts as $post) {
            if($post["slug"] === $slug) {
                $new_post = $post;
            }
        }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});

