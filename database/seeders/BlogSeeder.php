<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::create([
            'user_id' => 1,
            'title' => "Test blog",
            'short_description' => "This is a test blog",
            'blog' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat voluptates voluptate architecto voluptatibus totam consectetur excepturi autem illo obcaecati, soluta facere ratione labore iure, nihil deserunt. Laudantium, itaque accusantium. At ipsum provident totam nihil, atque quasi numquam laboriosam, quas quod quisquam quis iusto quae. Voluptate debitis, reiciendis dolorem laudantium ullam labore facere, nemo consectetur officiis ea enim nam voluptates ut dicta quasi error nobis eligendi praesentium sapiente iste? Mollitia commodi et ipsam, adipisci, architecto quos ea repellendus cupiditate voluptate harum in. Ipsum atque consequuntur nulla laborum. In minus mollitia ullam tempora exercitationem molestias esse similique fuga, velit adipisci error ex."
        ]);
        Blog::create([
            'user_id' => 1,
            'title' => "Test blog 2",
            'short_description' => "This is a test blog 2",
            'blog' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat voluptates voluptate architecto voluptatibus totam consectetur excepturi autem illo obcaecati, soluta facere ratione labore iure, nihil deserunt. Laudantium, itaque accusantium. At ipsum provident totam nihil, atque quasi numquam laboriosam, quas quod quisquam quis iusto quae. Voluptate debitis, reiciendis dolorem laudantium ullam labore facere, nemo consectetur officiis ea enim nam voluptates ut dicta quasi error nobis eligendi praesentium sapiente iste? Mollitia commodi et ipsam, adipisci, architecto quos ea repellendus cupiditate voluptate harum in. Ipsum atque consequuntur nulla laborum. In minus mollitia ullam tempora exercitationem molestias esse similique fuga, velit adipisci error ex."
        ]);
        Blog::create([
            'user_id' => 1,
            'title' => "Test blog 3",
            'short_description' => "This is a test blog 3",
            'blog' => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat voluptates voluptate architecto voluptatibus totam consectetur excepturi autem illo obcaecati, soluta facere ratione labore iure, nihil deserunt. Laudantium, itaque accusantium. At ipsum provident totam nihil, atque quasi numquam laboriosam, quas quod quisquam quis iusto quae. Voluptate debitis, reiciendis dolorem laudantium ullam labore facere, nemo consectetur officiis ea enim nam voluptates ut dicta quasi error nobis eligendi praesentium sapiente iste? Mollitia commodi et ipsam, adipisci, architecto quos ea repellendus cupiditate voluptate harum in. Ipsum atque consequuntur nulla laborum. In minus mollitia ullam tempora exercitationem molestias esse similique fuga, velit adipisci error ex."
        ]);
    }
}
