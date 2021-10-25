<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder

{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        // User::create([
        //     'name' => 'Dhiya Ulhaq Ramadhanty',
        //     'email' => '13dhiyaulhaq@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'Kim Taehyung',
        //     'email' => 'kthbighit@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();  

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create ([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque aliquam deleniti eum, repellendus, nemo dolorem ipsum suscipit quia rerum earum ullam quibusdam rem soluta!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque aliquam deleniti eum, repellendus, nemo dolorem ipsum suscipit quia rerum earum ullam quibusdam rem soluta! Placeat repudiandae tenetur modi provident in sunt vitae at neque laborum itaque, officiis optio voluptatem assumenda ex molestias excepturi. Aliquid rerum ratione quisquam praesentium ab aut cumque reiciendis dolorum velit in nobis quibusdam doloribus et illum eligendi ullam delectus unde autem totam, sunt molestias tempora vel numquam. Ut, ipsum nam iste cum, aut pariatur odio hic quia accusamus perferendis cumque neque, aliquam numquam adipisci excepturi suscipit enim. Consequatur natus enim sunt quod id nisi laborum explicabo.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create ([
        //     'title' => 'Judul Ke dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque aliquam deleniti eum, repellendus, nemo dolorem ipsum suscipit quia rerum earum ullam quibusdam rem soluta!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque aliquam deleniti eum, repellendus, nemo dolorem ipsum suscipit quia rerum earum ullam quibusdam rem soluta! Placeat repudiandae tenetur modi provident in sunt vitae at neque laborum itaque, officiis optio voluptatem assumenda ex molestias excepturi. Aliquid rerum ratione quisquam praesentium ab aut cumque reiciendis dolorum velit in nobis quibusdam doloribus et illum eligendi ullam delectus unde autem totam, sunt molestias tempora vel numquam. Ut, ipsum nam iste cum, aut pariatur odio hic quia accusamus perferendis cumque neque, aliquam numquam adipisci excepturi suscipit enim. Consequatur natus enim sunt quod id nisi laborum explicabo.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create ([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque aliquam deleniti eum, repellendus, nemo dolorem ipsum suscipit quia rerum earum ullam quibusdam rem soluta!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque aliquam deleniti eum, repellendus, nemo dolorem ipsum suscipit quia rerum earum ullam quibusdam rem soluta! Placeat repudiandae tenetur modi provident in sunt vitae at neque laborum itaque, officiis optio voluptatem assumenda ex molestias excepturi. Aliquid rerum ratione quisquam praesentium ab aut cumque reiciendis dolorum velit in nobis quibusdam doloribus et illum eligendi ullam delectus unde autem totam, sunt molestias tempora vel numquam. Ut, ipsum nam iste cum, aut pariatur odio hic quia accusamus perferendis cumque neque, aliquam numquam adipisci excepturi suscipit enim. Consequatur natus enim sunt quod id nisi laborum explicabo.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create ([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque aliquam deleniti eum, repellendus, nemo dolorem ipsum suscipit quia rerum earum ullam quibusdam rem soluta!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque aliquam deleniti eum, repellendus, nemo dolorem ipsum suscipit quia rerum earum ullam quibusdam rem soluta! Placeat repudiandae tenetur modi provident in sunt vitae at neque laborum itaque, officiis optio voluptatem assumenda ex molestias excepturi. Aliquid rerum ratione quisquam praesentium ab aut cumque reiciendis dolorum velit in nobis quibusdam doloribus et illum eligendi ullam delectus unde autem totam, sunt molestias tempora vel numquam. Ut, ipsum nam iste cum, aut pariatur odio hic quia accusamus perferendis cumque neque, aliquam numquam adipisci excepturi suscipit enim. Consequatur natus enim sunt quod id nisi laborum explicabo.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
