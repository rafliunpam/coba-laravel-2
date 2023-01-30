<?php

namespace App\Models;



class Post 
{
   Private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rafli Cadel",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt corrupti nostrum, laudantium asperiores rem quo. Soluta earum, eum corrupti explicabo, hic iure quibusdam iste quisquam ratione dicta quia. Est vero fugiat suscipit ipsam laudantium exercitationem voluptas consectetur ratione. Exercitationem, quam iste animi est, reiciendis, at consequuntur nihil atque soluta optio illo. Error magnam, vel perferendis assumenda labore soluta asperiores, cupiditate itaque laboriosam pariatur voluptate similique provident ea? Ipsum sit nobis odio facilis minima molestiae, eum, dolores, exercitationem temporibus voluptate ipsam."
        ],
        [
            "title" => "Judul Post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Elvida Rahmi",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores rem obcaecati aliquid expedita sapiente impedit harum laudantium saepe iste dolorem repudiandae accusamus facere numquam inventore earum, natus dignissimos nihil explicabo, sequi, quae provident et adipisci architecto porro. Eos similique rerum neque, molestias nulla atque animi quod nobis nam libero amet, laudantium omnis iusto dicta aperiam facere architecto delectus. Eos, ab repellendus modi culpa veniam quos maiores velit nisi incidunt, unde quam. Voluptatem consequatur quibusdam laboriosam recusandae, facilis nostrum ullam maiores, quae nesciunt molestias debitis laudantium similique vitae labore odit ipsum, accusantium repudiandae expedita aliquid saepe dignissimos placeat aspernatur vero eos. Nostrum ipsum saepe nihil earum illum sed iste quod, voluptatem veritatis nesciunt cumque perspiciatis temporibus, consequatur est quas, atque maxime?"
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
