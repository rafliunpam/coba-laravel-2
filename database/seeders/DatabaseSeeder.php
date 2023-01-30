<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

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
            'name' => 'Rafli Unpam',
            'username' => 'rafliunpam',
            'email' => 'rafli.unpam@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Category::create([
            'name' => 'Desain Web',
            'slug' => 'desain-web',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => '1',
        //     'user_id' => '1',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi fugit necessitatibus tempore cumque. Ex inventore consectetur illo quod, nisi ipsum error officia odio sequi expedita necessitatibus excepturi molestiae voluptatem nostrum sint iure qui facere laboriosam voluptatibus reprehenderit.',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi fugit necessitatibus tempore cumque. Ex inventore consectetur illo quod, nisi ipsum error officia odio sequi expedita necessitatibus excepturi molestiae voluptatem nostrum sint iure qui facere laboriosam voluptatibus reprehenderit. Aliquam asperiores, dolor fugit voluptatum commodi in porro, ratione quas unde vitae aliquid</p><p>nisi inventore modi qui laudantium voluptatibus incidunt, consequatur non dolores consectetur vero alias! Perferendis quidem culpa hic nulla, vel fugiat sit accusamus cupiditate ipsum minima aliquam? Laboriosam officia consectetur facilis ipsa nulla eius molestiae ducimus similique, et beatae nobis aliquam assumenda aperiam, quos debitis cum voluptatem delectus libero omnis. Commodi nesciunt maxime cum quaerat veritatis vero natus beatae eius at! Debitis vel illum doloremque. Dignissimos aut dicta enim necessitatibus? Hic voluptatum in, dolorum facere illum odio maxime excepturi fugit iure dolorem at quo sunt minima necessitatibus quia similique aperiam eius, magnam, magni sit? Culpa tempore officia impedit itaque fuga enim?</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => '2',
        //     'user_id' => '1',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi fugit necessitatibus tempore cumque. Ex inventore consectetur illo quod, nisi ipsum error officia odio sequi expedita necessitatibus excepturi molestiae voluptatem nostrum sint iure qui facere laboriosam voluptatibus reprehenderit.',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi fugit necessitatibus tempore cumque. Ex inventore consectetur illo quod, nisi ipsum error officia odio sequi expedita necessitatibus excepturi molestiae voluptatem nostrum sint iure qui facere laboriosam voluptatibus reprehenderit. Aliquam asperiores, dolor fugit voluptatum commodi in porro, ratione quas unde vitae aliquid</p><p>nisi inventore modi qui laudantium voluptatibus incidunt, consequatur non dolores consectetur vero alias! Perferendis quidem culpa hic nulla, vel fugiat sit accusamus cupiditate ipsum minima aliquam? Laboriosam officia consectetur facilis ipsa nulla eius molestiae ducimus similique, et beatae nobis aliquam assumenda aperiam, quos debitis cum voluptatem delectus libero omnis. Commodi nesciunt maxime cum quaerat veritatis vero natus beatae eius at! Debitis vel illum doloremque. Dignissimos aut dicta enim necessitatibus? Hic voluptatum in, dolorum facere illum odio maxime excepturi fugit iure dolorem at quo sunt minima necessitatibus quia similique aperiam eius, magnam, magni sit? Culpa tempore officia impedit itaque fuga enim?</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => '3',
        //     'user_id' => '1',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi fugit necessitatibus tempore cumque. Ex inventore consectetur illo quod, nisi ipsum error officia odio sequi expedita necessitatibus excepturi molestiae voluptatem nostrum sint iure qui facere laboriosam voluptatibus reprehenderit.',
        //     'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi fugit necessitatibus tempore cumque. Ex inventore consectetur illo quod, nisi ipsum error officia odio sequi expedita necessitatibus excepturi molestiae voluptatem nostrum sint iure qui facere laboriosam voluptatibus reprehenderit. Aliquam asperiores, dolor fugit voluptatum commodi in porro, ratione quas unde vitae aliquid</p><p>nisi inventore modi qui laudantium voluptatibus incidunt, consequatur non dolores consectetur vero alias! Perferendis quidem culpa hic nulla, vel fugiat sit accusamus cupiditate ipsum minima aliquam? Laboriosam officia consectetur facilis ipsa nulla eius molestiae ducimus similique, et beatae nobis aliquam assumenda aperiam, quos debitis cum voluptatem delectus libero omnis. Commodi nesciunt maxime cum quaerat veritatis vero natus beatae eius at! Debitis vel illum doloremque. Dignissimos aut dicta enim necessitatibus? Hic voluptatum in, dolorum facere illum odio maxime excepturi fugit iure dolorem at quo sunt minima necessitatibus quia similique aperiam eius, magnam, magni sit? Culpa tempore officia impedit itaque fuga enim?</p>'
        // ]);
        
    }
}
