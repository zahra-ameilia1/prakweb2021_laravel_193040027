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
        //     'name' => 'Zahra Dwi Ameilia',
        //     'email' => 'zahradwiameilia1@gmail.com',
        //     'password' => bcrypt ('12345')
        // ]);

        // User::create([
        //     'name' => 'Faira Mustika',
        //     'email' => 'username12345@gmail.com',
        //     'password' => bcrypt ('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, eaque excepturi officiis est commodi ratione necessitatibus quo quidem sint aut.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem magnam unde odio vitae! Dolorem consectetur ipsam, quis voluptatem soluta cum eius, hic impedit culpa molestiae placeat repudiandae explicabo laborum. Maxime, sint! In vero qui, quod debitis ab accusantium cumque nam distinctio, accusamus facilis fugit est eaque velit quae aliquam necessitatibus nulla sunt delectus soluta dolor corporis possimus! Nesciunt est, quo temporibus quos molestias commodi repudiandae ullam reprehenderit! Nemo error voluptatibus quo eaque unde facilis optio sequi iusto cupiditate vero cumque fugit quisquam ipsam ea molestias, mollitia corrupti voluptate ipsa voluptates. Explicabo, quae labore error facere ea nostrum at voluptatum corporis.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, eaque excepturi officiis est commodi ratione necessitatibus quo quidem sint aut.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem magnam unde odio vitae! Dolorem consectetur ipsam, quis voluptatem soluta cum eius, hic impedit culpa molestiae placeat repudiandae explicabo laborum. Maxime, sint! In vero qui, quod debitis ab accusantium cumque nam distinctio, accusamus facilis fugit est eaque velit quae aliquam necessitatibus nulla sunt delectus soluta dolor corporis possimus! Nesciunt est, quo temporibus quos molestias commodi repudiandae ullam reprehenderit! Nemo error voluptatibus quo eaque unde facilis optio sequi iusto cupiditate vero cumque fugit quisquam ipsam ea molestias, mollitia corrupti voluptate ipsa voluptates. Explicabo, quae labore error facere ea nostrum at voluptatum corporis.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, eaque excepturi officiis est commodi ratione necessitatibus quo quidem sint aut.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem magnam unde odio vitae! Dolorem consectetur ipsam, quis voluptatem soluta cum eius, hic impedit culpa molestiae placeat repudiandae explicabo laborum. Maxime, sint! In vero qui, quod debitis ab accusantium cumque nam distinctio, accusamus facilis fugit est eaque velit quae aliquam necessitatibus nulla sunt delectus soluta dolor corporis possimus! Nesciunt est, quo temporibus quos molestias commodi repudiandae ullam reprehenderit! Nemo error voluptatibus quo eaque unde facilis optio sequi iusto cupiditate vero cumque fugit quisquam ipsam ea molestias, mollitia corrupti voluptate ipsa voluptates. Explicabo, quae labore error facere ea nostrum at voluptatum corporis.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, eaque excepturi officiis est commodi ratione necessitatibus quo quidem sint aut.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem magnam unde odio vitae! Dolorem consectetur ipsam, quis voluptatem soluta cum eius, hic impedit culpa molestiae placeat repudiandae explicabo laborum. Maxime, sint! In vero qui, quod debitis ab accusantium cumque nam distinctio, accusamus facilis fugit est eaque velit quae aliquam necessitatibus nulla sunt delectus soluta dolor corporis possimus! Nesciunt est, quo temporibus quos molestias commodi repudiandae ullam reprehenderit! Nemo error voluptatibus quo eaque unde facilis optio sequi iusto cupiditate vero cumque fugit quisquam ipsam ea molestias, mollitia corrupti voluptate ipsa voluptates. Explicabo, quae labore error facere ea nostrum at voluptatum corporis.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}