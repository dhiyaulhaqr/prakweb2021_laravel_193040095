<?php

namespace App\Models;



class Post 
{
     private static $blog_posts = [
        [
            "title" => "Judul Tulisan Pertama",
            "slug" => "judul-Tulisan-pertama",
            "author" => "Dhiya Ulhaq Ramadhanty",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus nam, reiciendis reprehenderit dolores distinctio et id aliquam officia iure ipsum obcaecati doloribus, animi porro ratione! Reprehenderit, similique ipsa sed fugiat a eaque recusandae dolores! Praesentium temporibus labore debitis, corporis voluptas ipsam dolor odit fugiat? Voluptate quia, odit esse vitae, blanditiis repudiandae officia, sed explicabo accusantium alias libero ab in soluta delectus fugiat fugit! Vero asperiores, architecto porro quisquam dolorem corporis ullam nemo et, pariatur ea magnam, consequatur assumenda. Iste, odit!    ",
    
        ],
    
        [
            "title" => "Judul Tulisan Kedua",
            "slug" => "judul-Tulisan-kedua",
            "author" => "Atuy galon",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias repellendus in vel neque blanditiis veniam odit quaerat accusantium voluptatibus aut asperiores praesentium eaque atque autem suscipit, nihil modi temporibus tempora sit, corporis provident eveniet doloremque numquam! Accusamus consectetur adipisci vero at tempore, dolores eligendi? Quisquam eaque molestias perspiciatis perferendis aliquam sint. In fuga, nemo quo quia quibusdam nisi minima reiciendis illo est maiores cumque inventore a iste modi eveniet! Quisquam blanditiis nihil, et praesentium voluptatem sapiente, ex distinctio quos accusantium, velit in dolor. Vero, velit id tempore unde sint dolorem laboriosam dolores minus, iusto voluptas enim officia ab obcaecati impedit? ",
            
        ]
        ];

        public static function all()
        {
            return collect(self::$blog_posts);
        }
        public static function find($slug)
        {
            $posts = static::all();
            return $posts->firstWhere('slug', $slug);

        }
}
