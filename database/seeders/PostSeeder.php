<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Post Dummy Data
        \DB::table('posts')->truncate();
        $posts = collect([
            [
            'title' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
            'service_category_id'=>'1',
            'featured_image' => 'uploads/images/post/0m10E0522202112512760a8fe4f8abab.jpg',
            'body'=>'Maxime mollitia,
             molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
             numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
             optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
             obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
             nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit',
             'created_at'=>now(),
             'updated_at'=>now(),
           ],

           [
            'title' => 'Provident similique accusantium nemo autem. Veritatis
            obcaecati tenetur iure eius ',
            'service_category_id'=>'2',
            'featured_image' => 'uploads/images/post/02xJc0525202115300860ad1800ccb04.jpg',
            'body'=>'Maxime mollitia,
             molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
             numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
             optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
             obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
             nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit',
             'created_at'=>now(),
             'updated_at'=>now(),

           ],

           [
            'title' => 'In publishing and graphic design, Lorem ipsum ',
            'service_category_id'=>'3',
            'featured_image' => 'uploads/images/post/6Yu3Q0526202103322060adc14412293.jpg',
            'body'=>'Maxime mollitia,
             molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
             numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
             optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
             obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
             nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit',
             'created_at'=>now(),
             'updated_at'=>now(),
           ],

        ]);

        $posts->each(function($post){
            \DB::table('posts')->insert([
                'title' => $post['title'],
                'service_category_id' => $post['service_category_id'],
                'featured_image'=>$post['featured_image'],
                'body'=>$post['body'],
                'created_at'=>$post['created_at'],
                'updated_at'=>$post['updated_at'],
            ]);
        });
    }
}
