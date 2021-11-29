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


        User::create([

            'name' => 'M.Dio Geovani',
            'username' => 'diogeovani',
            'email' => 'mdio.geovani22@gmail.com',
            'password' => bcrypt('password')

        ]);

        // User::create([

        //     'name' => 'fauzan kamal',
        //     'email' => 'fauzan@gmail.com',
        //     'password' => bcrypt('12345')

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
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, culpa. Vel deleniti est consequatur esse debitis non eaque repellendus. Maxime veniam impedit unde 
        //         mollitia dolore enim nulla ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, culpa. Vel deleniti est consequatur esse debitis non eaque repellendus. Maxime veniam impedit unde 
        //         mollitia dolore enim nulla ad fugit vel! Recusandae quos tenetur incidunt ea doloribus, quasi, illo, officia delectus quaerat non maxime ut molestiae in iste dolor sed sunt rerum quas vitae alias. Dolore ea nemo temporibus expedita id quae, necessitatibus ipsum reiciendis cupiditate delectus sit maiores. Cum vero illo nisi animi voluptate cupiditate hic aliquid ut atque fugiat quae tenetur qui accusantium autem, porro perspiciatis rerum vel eos similique, maxime distinctio deleniti suscipit, illum harum? Commodi, quos quibusdam!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, culpa. Vel deleniti est consequatur esse debitis non eaque repellendus. Maxime veniam impedit unde 
        //     mollitia dolore enim nulla ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, culpa. Vel deleniti est consequatur esse debitis non eaque repellendus. Maxime veniam impedit unde 
        //     mollitia dolore enim nulla ad fugit vel! Recusandae quos tenetur incidunt ea doloribus, quasi, illo, officia delectus quaerat non maxime ut molestiae in iste dolor sed sunt rerum quas vitae alias. Dolore ea nemo temporibus expedita id quae, necessitatibus ipsum reiciendis cupiditate delectus sit maiores. Cum vero illo nisi animi voluptate cupiditate hic aliquid ut atque fugiat quae tenetur qui accusantium autem, porro perspiciatis rerum vel eos similique, maxime distinctio deleniti suscipit, illum harum? Commodi, quos quibusdam!',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, culpa. Vel deleniti est consequatur esse debitis non eaque repellendus. Maxime veniam impedit unde 
        //     mollitia dolore enim nulla ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, culpa. Vel deleniti est consequatur esse debitis non eaque repellendus. Maxime veniam impedit unde 
        //     mollitia dolore enim nulla ad fugit vel! Recusandae quos tenetur incidunt ea doloribus, quasi, illo, officia delectus quaerat non maxime ut molestiae in iste dolor sed sunt rerum quas vitae alias. Dolore ea nemo temporibus expedita id quae, necessitatibus ipsum reiciendis cupiditate delectus sit maiores. Cum vero illo nisi animi voluptate cupiditate hic aliquid ut atque fugiat quae tenetur qui accusantium autem, porro perspiciatis rerum vel eos similique, maxime distinctio deleniti suscipit, illum harum? Commodi, quos quibusdam!',
        //     'category_id' => 2,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, culpa. Vel deleniti est consequatur esse debitis non eaque repellendus. Maxime veniam impedit unde 
        //     mollitia dolore enim nulla ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, culpa. Vel deleniti est consequatur esse debitis non eaque repellendus. Maxime veniam impedit unde 
        //     mollitia dolore enim nulla ad fugit vel! Recusandae quos tenetur incidunt ea doloribus, quasi, illo, officia delectus quaerat non maxime ut molestiae in iste dolor sed sunt rerum quas vitae alias. Dolore ea nemo temporibus expedita id quae, necessitatibus ipsum reiciendis cupiditate delectus sit maiores. Cum vero illo nisi animi voluptate cupiditate hic aliquid ut atque fugiat quae tenetur qui accusantium autem, porro perspiciatis rerum vel eos similique, maxime distinctio deleniti suscipit, illum harum? Commodi, quos quibusdam!',
        //     'category_id' => 2,
        //     'user_id' => 2

        // ]);
    }
}
