<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(5)->create();

        Post::factory(30)->create();

        // Category::factory()->create();

        // User::create([
        //     'name' => 'Teddy Nanta',
        //     'email' => 'teddynanta@gmail.com',
        //     'password' => bcrypt('teddynanta')
        // ]);

        // User::create([
        //     'name' => 'Niken Zakia Putri',
        //     'email' => 'nikenzakiaputri@gmail.com',
        //     'password' => bcrypt('nikenzakiaputri')
        // ]);
            
        // User::create([
        //     'name' => 'Intan Mardini Putri',
        //     'email' => 'intanmardiniputri@gmail.com',
        //     'password' => bcrypt('intanmardiniputri')
        // ]);
            

        // Category::create([
        //     'category' => 'Life',
        //     'slug' => 'life'
        // ]);
            
        // Category::create([
        //     'category' => 'Gaming',
        //     'slug' => 'gaming'
        // ]);
            
        // Category::create([
        //     'category' => 'School Life',
        //     'slug' => 'school-life'
        // ]);
            
        // Category::create([
        //     'category' => 'Love and Relationship',
        //     'slug' => 'love-and-relationship'
        // ]);
            
        // Category::create([
        //     'category' => 'Financial',
        //     'slug' => 'financial'
        // ]);
            
        // Category::create([
        //     'category' => 'Work',
        //     'slug' => 'work'
        // ]);

        
        // Post::create([
        //     'title' => 'First Post',
        //     'user_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'first-post',
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates consectetur fugiat eligendi quos
        //     laudantium odio illo minima in architecto sint?',
        //     'content' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis soluta magnam perspiciatis a dicta. Aperiam dolor, repudiandae nulla voluptatibus sapiente nisi illum temporibus eveniet, totam explicabo nemo. Architecto cum in excepturi nemo totam? Delectus velit optio quaerat repudiandae est nam, repellendus dolorem possimus cumque deleniti reprehenderit nisi in, omnis dolor.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo temporibus quos aut aperiam provident, amet id? Repellat possimus ullam quia odio quod molestiae. Libero earum cumque similique autem laudantium, ipsam placeat! Natus fuga quaerat rem doloribus eveniet blanditiis vero aliquam adipisci unde necessitatibus, deserunt error odio commodi sint dolorum qui?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quae rerum accusantium. Dolores ad praesentium similique placeat, repellat repudiandae distinctio cupiditate molestias odio eius ea maiores labore nisi magni consequatur, illum ipsa facere quo libero soluta. Maiores obcaecati, odio ipsum aspernatur cumque a quaerat amet officiis, nostrum, recusandae exercitationem ea!</p>'
        // ]);

        // Post::create([
        //     'title' => 'Second Post',
        //     'user_id' => 2,
        //     'category_id' => 1,
        //     'slug' => 'second-post',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam a non illum unde quis corporis, consequatur aperiam nam reprehenderit dolor dolorum? Laudantium iure amet excepturi.',
        //     'content' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero culpa maiores numquam perspiciatis saepe architecto tenetur voluptate excepturi cumque, id libero inventore itaque odio optio minus? Non quas ratione assumenda eos obcaecati inventore laborum! Harum, delectus similique. Labore, magni! Nemo, maxime? Repellat et quae debitis ratione omnis eveniet atque? Tempore?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ullam eveniet quae? Perspiciatis vitae delectus neque quidem fugit odit tenetur eligendi. Ipsa harum pariatur ratione eligendi minima deleniti quae ipsam perspiciatis magni. Natus cumque voluptas magni voluptatem eveniet dolores magnam ad cupiditate quia reprehenderit sed, aut officiis? Vel, illo quae?</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum fugit voluptatem, voluptatum omnis totam quibusdam officia incidunt, adipisci aut quasi beatae harum laborum est quam.</p>'
        // ]);
        
        // Post::create([
        //     'title' => 'Third Post',
        //     'user_id' => 2,
        //     'category_id' => 2,
        //     'slug' => 'third-post',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam a non illum unde quis corporis, consequatur aperiam nam reprehenderit dolor dolorum? Laudantium iure amet excepturi.',
        //     'content' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero culpa maiores numquam perspiciatis saepe architecto tenetur voluptate excepturi cumque, id libero inventore itaque odio optio minus? Non quas ratione assumenda eos obcaecati inventore laborum! Harum, delectus similique. Labore, magni! Nemo, maxime? Repellat et quae debitis ratione omnis eveniet atque? Tempore?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ullam eveniet quae? Perspiciatis vitae delectus neque quidem fugit odit tenetur eligendi. Ipsa harum pariatur ratione eligendi minima deleniti quae ipsam perspiciatis magni. Natus cumque voluptas magni voluptatem eveniet dolores magnam ad cupiditate quia reprehenderit sed, aut officiis? Vel, illo quae?</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum fugit voluptatem, voluptatum omnis totam quibusdam officia incidunt, adipisci aut quasi beatae harum laborum est quam.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Fourth Post',
        //     'user_id' => 2,
        //     'category_id' => 3,
        //     'slug' => 'fourth-post',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam a non illum unde quis corporis, consequatur aperiam nam reprehenderit dolor dolorum? Laudantium iure amet excepturi.',
        //     'content' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero culpa maiores numquam perspiciatis saepe architecto tenetur voluptate excepturi cumque, id libero inventore itaque odio optio minus? Non quas ratione assumenda eos obcaecati inventore laborum! Harum, delectus similique. Labore, magni! Nemo, maxime? Repellat et quae debitis ratione omnis eveniet atque? Tempore?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ullam eveniet quae? Perspiciatis vitae delectus neque quidem fugit odit tenetur eligendi. Ipsa harum pariatur ratione eligendi minima deleniti quae ipsam perspiciatis magni. Natus cumque voluptas magni voluptatem eveniet dolores magnam ad cupiditate quia reprehenderit sed, aut officiis? Vel, illo quae?</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum fugit voluptatem, voluptatum omnis totam quibusdam officia incidunt, adipisci aut quasi beatae harum laborum est quam.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Fifth Post',
        //     'user_id' => 2,
        //     'category_id' => 4,
        //     'slug' => 'fifth-post',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam a non illum unde quis corporis, consequatur aperiam nam reprehenderit dolor dolorum? Laudantium iure amet excepturi.',
        //     'content' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero culpa maiores numquam perspiciatis saepe architecto tenetur voluptate excepturi cumque, id libero inventore itaque odio optio minus? Non quas ratione assumenda eos obcaecati inventore laborum! Harum, delectus similique. Labore, magni! Nemo, maxime? Repellat et quae debitis ratione omnis eveniet atque? Tempore?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ullam eveniet quae? Perspiciatis vitae delectus neque quidem fugit odit tenetur eligendi. Ipsa harum pariatur ratione eligendi minima deleniti quae ipsam perspiciatis magni. Natus cumque voluptas magni voluptatem eveniet dolores magnam ad cupiditate quia reprehenderit sed, aut officiis? Vel, illo quae?</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum fugit voluptatem, voluptatum omnis totam quibusdam officia incidunt, adipisci aut quasi beatae harum laborum est quam.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Sixth Post',
        //     'user_id' => 3,
        //     'category_id' => 1,
        //     'slug' => 'sixth-post',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam a non illum unde quis corporis, consequatur aperiam nam reprehenderit dolor dolorum? Laudantium iure amet excepturi.',
        //     'content' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero culpa maiores numquam perspiciatis saepe architecto tenetur voluptate excepturi cumque, id libero inventore itaque odio optio minus? Non quas ratione assumenda eos obcaecati inventore laborum! Harum, delectus similique. Labore, magni! Nemo, maxime? Repellat et quae debitis ratione omnis eveniet atque? Tempore?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ullam eveniet quae? Perspiciatis vitae delectus neque quidem fugit odit tenetur eligendi. Ipsa harum pariatur ratione eligendi minima deleniti quae ipsam perspiciatis magni. Natus cumque voluptas magni voluptatem eveniet dolores magnam ad cupiditate quia reprehenderit sed, aut officiis? Vel, illo quae?</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum fugit voluptatem, voluptatum omnis totam quibusdam officia incidunt, adipisci aut quasi beatae harum laborum est quam.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Seventh Post',
        //     'user_id' => 1,
        //     'category_id' => 5,
        //     'slug' => 'seventh-post',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam a non illum unde quis corporis, consequatur aperiam nam reprehenderit dolor dolorum? Laudantium iure amet excepturi.',
        //     'content' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero culpa maiores numquam perspiciatis saepe architecto tenetur voluptate excepturi cumque, id libero inventore itaque odio optio minus? Non quas ratione assumenda eos obcaecati inventore laborum! Harum, delectus similique. Labore, magni! Nemo, maxime? Repellat et quae debitis ratione omnis eveniet atque? Tempore?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ullam eveniet quae? Perspiciatis vitae delectus neque quidem fugit odit tenetur eligendi. Ipsa harum pariatur ratione eligendi minima deleniti quae ipsam perspiciatis magni. Natus cumque voluptas magni voluptatem eveniet dolores magnam ad cupiditate quia reprehenderit sed, aut officiis? Vel, illo quae?</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum fugit voluptatem, voluptatum omnis totam quibusdam officia incidunt, adipisci aut quasi beatae harum laborum est quam.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Eighth Post',
        //     'user_id' => 1,
        //     'category_id' => 6,
        //     'slug' => 'eighth-post',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam a non illum unde quis corporis, consequatur aperiam nam reprehenderit dolor dolorum? Laudantium iure amet excepturi.',
        //     'content' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero culpa maiores numquam perspiciatis saepe architecto tenetur voluptate excepturi cumque, id libero inventore itaque odio optio minus? Non quas ratione assumenda eos obcaecati inventore laborum! Harum, delectus similique. Labore, magni! Nemo, maxime? Repellat et quae debitis ratione omnis eveniet atque? Tempore?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ullam eveniet quae? Perspiciatis vitae delectus neque quidem fugit odit tenetur eligendi. Ipsa harum pariatur ratione eligendi minima deleniti quae ipsam perspiciatis magni. Natus cumque voluptas magni voluptatem eveniet dolores magnam ad cupiditate quia reprehenderit sed, aut officiis? Vel, illo quae?</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum fugit voluptatem, voluptatum omnis totam quibusdam officia incidunt, adipisci aut quasi beatae harum laborum est quam.</p>'
        // ]);
    }
}
